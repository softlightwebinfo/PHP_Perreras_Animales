<?php

class panelController extends Controller
{
    /**
     * indexController constructor.
     */
    public function __construct()
    {
        parent::__construct();

        Session::acceso_session('usuario/login/');

        $this->_view->userdata = $this->_userdata;
//        profesional/son-reus-5/
        $level = 'profesional';
        if ($this->_userdata->idUser() == 'Particular') {
            $level = 'profesional';
        }
        $empresaUrl = Ayuda::urlAmigable($this->_userdata->getUser()->getUsuario());
        $this->_view->_urlEscaparate = base_url("{$level}/{$empresaUrl}-{$this->_userdata->idUser()}");
        $Animales = new AnimalesModel();
        $this->_view->_animales = $Animales->getAll(false, null, Session::idUser(), true);;
        $this->_view->setTemplate('panel');
    }

    public function index()
    {
        $this->_view->panelTitle = "Bienvenido a tu panel de gestión Particular";
        $this->_view->titulo = $this->_view->getConfigure()->title;
        $this->_view->meta_descripcion = "Sistema Perreras";
        $this->_view->titulo_page = "Panel principal";
        $this->_view->renderizar("index", 'index');
    }

    /**
     * Listado de animales de cada particular y profesional
     */
    public function animales()
    {
        $id = $this->_userdata->idUser();
        $Animales = new AnimalesModel();
        $listadoAnunciosCount = $Animales->getAll(false, null, $id, true);
        $paginador = new Paginator($listadoAnunciosCount, NUMERO_PAGINACION, $this->get('pag') ?? 1, '?pag=(:num)');
        if ($this->get('pag')) {
            $listadoAnuncios = $Animales->getAll($paginador->getLimit(), $id)['anuncios'];
        } else {
            $listadoAnuncios = $Animales->getAll(true, "0," . NUMERO_PAGINACION, $id)['anuncios'];
        }
        $this->_view->_paginator = $paginador->toHtml();

        $this->_view->_listadoAnimales = $listadoAnuncios;
        $this->_view->panelTitle = "Bienvenido a tu panel de gestión Particular";
        $this->_view->titulo = $this->_view->getConfigure()->title;
        $this->_view->meta_descripcion = "Sistema Perreras";
        $this->_view->titulo_page = "Panel principal";
        $this->_view->renderizar("animales", 'index');
    }

    public function publicarAnimal()
    {
        $Tipo = new TipoAnimalEntity();
        $TiposListado = $Tipo->buscarTodos();

        $Estado = new EstadoEntity();
        $EstadoListado = $Estado->buscarTodos();

        $tarifasEntity = new TratamientoEntity();
        $tarifas = $tarifasEntity->buscarTodos();
        $this->_view->listadoTipo = $TiposListado;
        $this->_view->listadoEstado = $EstadoListado;
        $this->_view->_tarifas = $tarifas;
        $this->_view->panelTitle = "Bienvenido a tu panel de gestión Particular";
        $this->_view->titulo = $this->_view->getConfigure()->title;
        $this->_view->meta_descripcion = "Sistema Perreras";
        $this->_view->titulo_page = "Panel principal";
        $this->_view->renderizar("publicar-animal", 'index');
    }

    /**
     * Configuracion de la cuenta
     */
    public function configuracion()
    {
        $usuarioDato = new UsuarioDatoEntity();
        $usuarioDato->buscarPorPk($this->_userdata->idUser());

        $tarifa = new TarifasModel();

        $this->_view->_tarifas = $tarifa->getAll();

        $this->_view->_social = $usuarioDato;
        $this->_view->paneltitle = "Configura tu cuenta";
        $this->_view->titulo = $this->_view->getConfigure()->title;
        $this->_view->meta_descripcion = "Sistema Perreras";
        $this->_view->titulo_page = "Panel principal";
        $this->_view->renderizar("configuracion", 'index');
    }
}

?>