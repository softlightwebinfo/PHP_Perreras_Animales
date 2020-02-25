<?php

class anunciosController extends Controller
{
    /**
     * indexController constructor.
     */
    public function __construct()
    {
        parent::__construct();

    }

    public function index()
    {
        $RazaAnimales = new RazaAnimalEntity();
        $razaAnimales = $RazaAnimales->buscarTodos();

        $ProvinciasModel = new ProvinciasModel();
        $provincias = $ProvinciasModel->getAll();

        $municipios = array();


        $anuncios = new AnimalesModel();
        $listadoAnunciosCount = $anuncios->getAll(true, null, null, true, true, false, array(
//            'raza' => $this->get('raza'),
//            'provincia' => $this->get('prov'),
//            'municipio' => $this->get('mun'),
//            'role' => $this->get('rol')
        ));
        $paginador = new Paginator($listadoAnunciosCount, NUMERO_PAGINACION, $this->get('pag') ?? 1, '?pag=(:num)');
        if ($this->get('pag')) {
            $listadoAnuncios = $anuncios->getAll(true, $paginador->getLimit())['anuncios'];
        } else {
            $listadoAnuncios = $anuncios->getAll(true, "0," . NUMERO_PAGINACION)['anuncios'];
        }

        $this->_view->_paginator = $paginador->toHtml();
        $this->_view->_listadoAnuncios = $listadoAnuncios;
        $this->_view->razaAnimales = $razaAnimales;
        $this->_view->provincias = $provincias;
        $this->_view->municipios = $municipios;
        $this->_view->titulo = $this->_view->getConfigure()->title;
        $this->_view->meta_descripcion = "Sistema Perreras";
        $this->_view->titulo_page = "Panel principal";
        $this->_view->renderizar("index", 'index');
    }

    public function publicarAnuncio()
    {
        if (Session::accesoViewSimple()) {
            $Tipo = new TipoAnimalEntity();
            $TiposListado = $Tipo->buscarTodos();

            $Estado = new EstadoEntity();
            $EstadoListado = $Estado->buscarTodos();

            $this->_view->listadoTipo = $TiposListado;
            $this->_view->listadoEstado = $EstadoListado;
            $this->_view->titulo = $this->_view->getConfigure()->title;
            $this->_view->meta_descripcion = "Sistema Perreras";
            $this->_view->titulo_page = "Panel principal";
            $this->_view->renderizar("publicar-anuncio", 'index');
        } else {
            $this->_view->titulo = $this->_view->getConfigure()->title;
            $this->_view->meta_descripcion = "Sistema Perreras";
            $this->_view->titulo_page = "Panel principal";
            $this->_view->renderizar("no-logueado", 'index');
        }
    }

    public function crearAnuncio()
    {
        header('Content-Type: application/json');
        $data = array(
            "error" => true,
            "errorMessage" => array(),
            "success" => false,
            "successMessage" => ""
        );
        if ($this->is_ajax()) {
            $data['error'] = false;
            try {
                $Animal = new AnimaleEntity();
                $Animal->setNombre($this->post('nombre'));
                $Animal->setDescripcion($this->post('descripcion'));
                $Animal->setFk_estado($this->post('estado'));
                $Animal->setFoto('');
                $Animal->setTipo($this->post('tipo'));
                $Animal->setDireccion($this->post('direccion'));
                $Animal->setFk_usuario($this->_userdata->idUser());
                $Animal->setRaza($this->post('raza'));
                if ($id = $Animal->guardar()) {
                    if (isset($_FILES['img'])) {
                        $files = Image::uploadFile("public/anuncios/{$Animal->getReferencia()}/", 'img');
                        ORM::$_db->updateRows($Animal->getTable(), array(
                            'foto' => $files
                        ), array(
                            "referencia" => $Animal->getReferencia()
                        ));

                    }
                    $data['success'] = true;
                    $data['successMessage'] = 'Se ha publicado correctamente el anuncio';
                } else {
                    throw new Exception('No se ha podido publicar su anuncio');
                }
            } catch (Exception $e) {
                $data['success'] = false;
                $data['errorMessage'] = $e->getMessage();
            }

            echo json_encode($data);

        }
    }
}

?>