<?php

class usuarioController extends Controller
{
    /**
     * indexController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->_view->header = false;
        $this->_view->footer = false;
        $this->_view->classWrapp = 'page-full';
        $this->_view->styleWrapp = "background-image:url(" . imageUrl('bg-1.jpg') . ")";
    }

    public function index()
    {
        $this->_view->titulo = $this->_view->getConfigure()->title;
        $this->_view->meta_descripcion = "Sistema de anuncios";
        $this->_view->titulo_page = "Panel principal";
        $this->_view->renderizar("index", 'index');
    }

    public function login()
    {
        if (Session::get('autenticado')) {
            if (!is_string($this->getVista())) {
                $this->redireccionar('panel/');
            }
        }
        $this->_view->titulo = $this->_view->getConfigure()->title;
        $this->_view->meta_descripcion = "Sistema de anuncios";
        $this->_view->titulo_page = "Panel principal";
        $this->_view->renderizar("login", 'index', $this->getVista());
    }

    public function registro()
    {
        if (Session::get('autenticado')) {
            $this->redireccionar('panel/');
        }

        $this->_view->titulo = $this->_view->getConfigure()->title;
        $this->_view->meta_descripcion = "Sistema de anuncios";
        $this->_view->titulo_page = "Panel principal";
        $this->_view->renderizar("registro", 'index');
    }

    public function recuperarContrasena()
    {
        $this->_view->titulo = $this->_view->getConfigure()->title;
        $this->_view->meta_descripcion = "Sistema de anuncios";
        $this->_view->titulo_page = "Panel principal";
        $this->_view->renderizar("recuperar-contrasena", 'index');
    }

    public function cerrarSession($redirect = false)
    {
        Session::destroy();
        if ($redirect) return;
        $this->redireccionar();
    }

    /**
     * Crearemos la cuenta mediante ajax
     */
    public function crearCuenta()
    {
        /*decimos que va a devolver un json*/
        header('Content-Type: application/json');
        $data = array(
            "error" => true,
            "errorMessage" => array(),
            "success" => false,
            "successMessage" => ""
        );
        /* comprovamos que es una peticion de ajax */
        if ($this->is_ajax()) {
            $data['error'] = false;
            try {
                $usuario = new Usuario();
                $usuario->setUsuario($this->post('username'));
                $usuario->setPassword($this->post('password'));
                $usuario->setEmail($this->post('email'));
                $usuario->setActivo(1);
                $usuario->setLevel(4);
                $usuario->setRole('Administrador');
                /*Registramos*/
                if ($usuario->create()) {
                    $data['success'] = true;
                    $data['successMessage'] = 'Se ha creado correctamente la cuenta';
                } else {
                    throw new Exception('No se ha podido crear la cuenta');
                }
            } catch (Exception $e) {
                $data['success'] = false;
                $data['errorMessage'] = $e->getMessage();
            }
            if ($data['success']) {
                $usuario->login();
            }
            echo json_encode($data);
        } else {
            header('HTTP/1.1 500 Internal Server Perreras');
            header('Content-Type: application/json; charset=UTF-8');
            die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
        }
    }

    public function iniciarSession()
    {/*decimos que va a devolver un json*/
        header('Content-Type: application/json');
        $data = array(
            "error" => true,
            "errorMessage" => array(),
            "success" => false,
            "successMessage" => ""
        );
        if ($this->is_ajax()) {
            $usuario = new Usuario();
            $usuario->setPassword($this->get('password'));
            $usuario->setEmail($this->get('email'));
            try {
                if ($usuario->login()) {
                    $data['success'] = true;
                    $data['successMessage'] = 'Has iniciado sesión correctamente';
                    $data['error'] = false;
                }
            } catch (Exception $exception) {
                $data['errorMessage'] = $exception->getMessage();
                $data['error'] = true;
            }
            echo json_encode($data);
        }
    }

    public function changePassword()
    {
        header('Content-Type: application/json');
        $datos = array();
        if ($this->is_ajax()) {
            if ($this->is_get()) {
                $usuarioModel = new UsuariosModel();
                $passwordChange = $usuarioModel->changePassword($this->_userdata->idUser(), $this->get('passwordNew'), $this->get('passwordOld'));
                if ($passwordChange) {
                    $datos['noIgual'] = false;
                    $this->cerrarSession(true);
                } else {
                    $datos['noIgual'] = true;
                }
            }
        }
        die(json_encode($datos));
    }

    public function saveSocial()
    {
        header('Content-Type: application/json');
        $datos = array(
            "success" => false
        );

        if ($this->is_ajax()) {
            $usuarioDato = new UsuarioDatoEntity();
            $usuarioDato->setFk_usuario($this->_userdata->idUser());
            $usuarioDato->buscarPorPk($this->_userdata->idUser());
            $usuarioDato->setSocialFacebook($this->post('facebook'));
            $usuarioDato->setSocialTwitter($this->post('twitter'));
            $usuarioDato->setSocialGooglePlus($this->post('googlePlus'));
            $usuarioDato->setSocialYoutube($this->post('youtube'));
            $usuarioDato->setSocialInstagram($this->post('instagram'));
            $usuarioDato->guardar();
            $datos['success'] = true;
        }

        die(json_encode($datos));
    }

    public function saveBiografia()
    {
        header('Content-Type: application/json');
        $datos = array(
            "success" => false
        );
        if ($this->is_ajax()) {
            $usuarioDato = new UsuarioDatoEntity();
            $usuarioDato->buscarPorPk($this->_userdata->idUser());
            $usuarioDato->setBiografia($this->post('biografia'));
            if ($usuarioDato->getFk_usuario() != "") {
                if ($usuarioDato->guardar()) {
                    $datos['success'] = true;
                }
            } else {
                $usuarioDato->setFk_usuario($this->_userdata->idUser());
                if ($usuarioDato->save()) {
                    $datos['success'] = true;
                }
            }

        }

        die(json_encode($datos));
    }
}

?>