<?php

class AnunciosController extends codeunicController
{

    private $_model;

    public function __construct()
    {
        parent::__construct();
        $this->_acl->sessionRol('Administrador');
        $this->_view->setTemplate('codeunic');
    }

    public function index()
    {
        $Anuncio = new AnimalesModel();
        $listadoAnuncios = $Anuncio->getAll(false,null,null,null,true,false);

        $this->_view->_listadoAnuncios = $listadoAnuncios;
        $this->_view->titulo = "Administración | CodeUnic";
        $this->_view->page_title = "Dashboard";
        $this->_view->page_subTitle = "Bienvenido al panel del administrador";
        $this->_view->no_header = false;
        $this->_view->meta_descripcion = "";
        $this->_view->renderizar("index", 'code-unic');
    }

    public function pendientes()
    {
        $Anuncio = new AnimalesModel();
        $listadoPendientes = $Anuncio->getAll(false, null, null, null, false, false);

        $this->_view->_listadoPendientes = $listadoPendientes;
        $this->_view->titulo = "Administración | CodeUnic";
        $this->_view->page_title = "Dashboard";
        $this->_view->page_subTitle = "Bienvenido al panel del administrador";
        $this->_view->no_header = false;
        $this->_view->meta_descripcion = "";
        $this->_view->renderizar("pendientes", 'code-unic');
    }

    public function eliminados()
    {
        $Anuncio = new AnimalesModel();
        $listadoEliminados = $Anuncio->getAll(false, null, null, null, false, true);

        $this->_view->_listadoEliminados = $listadoEliminados;
        $this->_view->titulo = "Administración | CodeUnic";
        $this->_view->page_title = "Dashboard";
        $this->_view->page_subTitle = "Bienvenido al panel del administrador";
        $this->_view->no_header = false;
        $this->_view->meta_descripcion = "";
        $this->_view->renderizar("eliminados", 'code-unic');
    }

    public function aceptarAnuncio()
    {
        header('Content-Type: application/json');
        $post = $_POST;
        $datos['response'] = true;

        $Animal = new AnimaleEntity();
        if(!ORM::$_db->update($Animal->getTable(),array('activo' => date('Y-m-d H-i-s')),'referencia = '. $post['referencia'])){
            $datos['response'] = false;
        }

        die(json_encode($datos));
    }

    public function rechazarAnuncio(){
        header('Content-Type: application/json');
        $post = $_POST;
        $datos['response'] = true;

        $Animal = new AnimaleEntity();
        if(!ORM::$_db->update($Animal->getTable(),array('eliminado' => date('Y-m-d H-i-s')),'referencia = '. $post['referencia'])){
            $datos['response'] = false;
        }

        die(json_encode($datos));
    }
}
