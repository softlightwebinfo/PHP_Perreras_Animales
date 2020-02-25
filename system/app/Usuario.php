<?php


class Usuario extends Entity implements Sql_implement
{
    protected $_id;
    protected $_usuario;
    protected $_email;
    protected $_password;
    protected $_role;
    protected $_level;
    protected $_online;
    protected $_fechaRegistro;
    protected $_fechaLast;
    protected $_avatar;
    protected $_activo;
    protected $_eliminado;

    public function __construct()
    {
        parent::__construct('usuarios');
    }

    public function create()
    {
        $query = self::$_db->get($this->_table, array(
            "email=" => $this->_email
        ), 'or');

        try {
            if (count($query) == 1) {
                throw new Exception('El email ya existe en la base de datos');
            } else {
                // TODO: Implement create() method.
                $id = self::$_db->insert($this->_table, array(
                    'usuario' => $this->_usuario,
                    'email' => $this->_email,
                    'password' => Hash::getHash(HASH_ALGORITMO, $this->_password, HASH_KEY),
                    'role' => $this->_role,
                    'level' => $this->_level,
                    'online' => time(),
                    'fechaLast' => date('Y-m-d H:i:s'),
                    'activo' => $this->_activo
                ));
            }
        } catch (Exception $exception) {
            throw new Exception($exception->getMessage());
        }
        return $this->_id = $id;
    }

    public function login()
    {
        $query = "SELECT * FROM {$this->_table} where email=:email and password=:password LIMIT 1";

        $st = self::$_db->prepare($query);
        $dato = array(
            ":email" => $this->_email,
            ":password" => Hash::getHash(HASH_ALGORITMO, $this->_password, HASH_KEY)
        );
        $st->execute($dato);
        $fetch = $st->fetch(PDO::FETCH_OBJ);
        if (empty($fetch)) {
            throw new Exception('La cuenta es incorrecta');
        }
        $usuario = new Usuario();
        $usuario->setId($fetch->id);
        $usuario->setUsuario($fetch->usuario);
        $usuario->setEmail($fetch->email);
        $usuario->setFechaLast($fetch->fechaLast);
        $usuario->setFechaRegistro($fetch->fechaRegistro);
        $usuario->setOnline($fetch->online);
        $usuario->setPassword($fetch->password);
        $usuario->setRole($fetch->role);
        $usuario->setLevel($fetch->level);
        $usuario->setAvatar($fetch->avatar);
        Session::set("autenticado", 1);
        Session::set("tiempo", time());
        Session::set("level", $fetch->role);
        Session::set("id_user", $fetch->id);
        Session::set("user", $usuario);
        return true;
    }

    public function update()
    {
        // TODO: Implement update() method.
    }

    public function get()
    {
        // TODO: Implement get() method.
    }

    public function delete()
    {

    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->_id = $id;
    }

    /**
     * @return mixed
     */
    public function getUsuario()
    {
        return $this->_usuario;
    }

    /**
     * @param mixed $usuario
     */
    public function setUsuario($usuario)
    {
        $this->_usuario = $usuario;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->_email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->_password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->_password = $password;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->_role;
    }

    /**
     * @param mixed $role
     */
    public function setRole($role)
    {
        $this->_role = $role;
    }

    /**
     * @return mixed
     */
    public function getLevel()
    {
        return $this->_level;
    }

    /**
     * @param mixed $level
     */
    public function setLevel($level)
    {
        $this->_level = $level;
    }

    /**
     * @return mixed
     */
    public function getOnline()
    {
        return $this->_online;
    }

    /**
     * @param mixed $online
     */
    public function setOnline($online)
    {
        $this->_online = $online;
    }

    /**
     * @return mixed
     */
    public function getFechaRegistro()
    {
        return $this->_fechaRegistro;
    }

    /**
     * @param mixed $fechaRegistro
     */
    public function setFechaRegistro($fechaRegistro)
    {
        $this->_fechaRegistro = $fechaRegistro;
    }

    /**
     * @return mixed
     */
    public function getFechaLast()
    {
        return $this->_fechaLast;
    }

    /**
     * @param mixed $fechaLast
     */
    public function setFechaLast($fechaLast)
    {
        $this->_fechaLast = $fechaLast;
    }

    /**
     * @return mixed
     */
    public function getAvatar()
    {
        if (true) {
            $this->_avatar = imageUrl("avatar.png");
        }
        return $this->_avatar;
    }

    public function avatar()
    {
        return $this->_avatar;
    }

    /**
     * @param mixed $avatar
     */
    public function setAvatar($avatar)
    {
        $this->_avatar = $avatar;
    }

    /**
     * @return mixed
     */
    public function getEliminado()
    {
        return $this->_eliminado;
    }

    /**
     * @param mixed $eliminado
     */
    public function setEliminado($eliminado)
    {
        $this->_eliminado = $eliminado;
    }

    /**
     * @return mixed
     */
    public function getActivo()
    {
        return $this->_activo;
    }

    /**
     * @param mixed $activo
     */
    public function setActivo($activo)
    {
        $this->_activo = $activo;
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        self::$_db = null;
    }


}