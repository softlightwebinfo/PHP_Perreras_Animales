<?php

class contactoController extends Controller
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
        $provinciasModel = new ProvinciasModel();
        $provincias = $provinciasModel->getAll();
        $this->_view->_listadoProvincias = $provincias;
        $this->_view->titulo = $this->_view->getConfigure()->title;
        $this->_view->meta_descripcion = "Sistema Perreras";
        $this->_view->titulo_page = "Panel principal";
        $this->_view->renderizar("index", 'index');
    }
}
?>