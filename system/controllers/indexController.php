<?php

class indexController extends Controller
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
        $anuncios = new AnimalesModel();
        $listadoAnuncios = $anuncios->getAll(true, "8")['anuncios'];
        $this->_view->_listadoAnuncios = $listadoAnuncios;
        $this->_view->titulo = $this->_view->getConfigure()->title;
        $this->_view->meta_descripcion = "Sistema Perreras";
        $this->_view->titulo_page = "Panel principal";
        $this->_view->renderizar("index", 'index');
    }

}

?>