<?php

class profesionalController extends Controller
{
    /**
     * indexController constructor.
     */
    public function __construct($usuario = null, $animal = null)
    {
        parent::__construct();
    }

    public function index()
    {
        $nombreUsuario = $this->_view->segment(1);
        $animal = $this->_view->segment(2);
        if (is_null($nombreUsuario)) $this->redireccionar();
        if (!is_null($nombreUsuario) and is_null($animal)) {
            $this->showEmpresa($nombreUsuario);
        }
        if (!is_null($animal)) {
            $this->detalle($animal);
        }
        $this->_view->titulo = $this->_view->getConfigure()->title;
        $this->_view->meta_descripcion = "Sistema Perreras";
        $this->_view->titulo_page = "Panel principal";
        $this->_view->renderizar("index", 'index');
    }

    private function showEmpresa($empresa = null)
    {
        $id = explode('-', $empresa);
        $id = $id[count($id) - 1];
        $empresa = new UsuarioEntity();
        $empresa->setId($id);
        $row = $empresa->buscarPorPk();
        if (!$row->rowCount()) {
            $this->redireccionar('');
        }
        $Animales = new AnimalesModel();
        $listadoAnunciosCount = $Animales->getAll(false,null, $id, true);
        $paginador = new Paginator($listadoAnunciosCount, NUMERO_PAGINACION, $this->get('pag') ?? 1, '?pag=(:num)');
        if ($this->get('pag')) {
            $listadoAnuncios = $Animales->getAll($paginador->getLimit(), $id)['anuncios'];
        } else {
            $listadoAnuncios = $Animales->getAll(true,"0," . NUMERO_PAGINACION, $id)['anuncios'];
        }
        $this->_view->_paginator = $paginador->toHtml();

        $datos = new UsuarioDatoEntity();
        $datos->buscarPorPk($empresa->getId());

        $this->_view->_datos = $datos;
        $this->_view->_empresa = $empresa;
        $this->_view->_listadoAnuncios = $listadoAnuncios;
        $this->_view->titulo = $this->_view->getConfigure()->title;
        $this->_view->meta_descripcion = "Sistema Perreras";
        $this->_view->titulo_page = "Panel principal";
        $this->_view->renderizar("detalle-empresa", 'detalle-empresa');
    }

    private function detalle($animal = null)
    {
        $id = explode('-', $animal);
        $id = $id[count($id) - 1];
        /************************* Obtener animal *************************/
        $Animal = new AnimalesModel();
        $animal = $Animal->get($id);
        /************************* Obtener usuario *************************/
        $usuario = new UsuarioEntity();
        $usuario->setId($animal->getFk_usuario());
        $usuario->buscarPorPk();
        /************************* Obtener countAnimales *************************/
        $animalesCount = $Animal->getAll(true,0, $usuario->getId());
        /************************* Anuncios Similares *************************/
        $listadoSimilares = $Animal->similares($usuario->getId(), 2, true);
        /************************* Vistas *************************/
        $this->_view->_animalesSimilares = $listadoSimilares;
        $this->_view->_animalesCount = ($animalesCount['lenght']);
        $this->_view->_animal = $animal;
        $this->_view->_usuario = $usuario;
        $this->_view->setJs(array('detalle'));
        $this->_view->titulo = $this->_view->getConfigure()->title;
        $this->_view->meta_descripcion = "Sistema Perreras";
        $this->_view->titulo_page = "Panel principal";
        $this->_view->renderizar("detalle", 'detalle-animal');
    }
}

?>