<?php

class AnimaleIncaEntity extends Entity
{
    protected $referencia;
    protected $nombre;
    protected $descripcion;
    protected $raza;
    protected $tipo;
    protected $fecha_entrada;
    protected $fk_estado;
    protected $fk_usuario;
    protected $foto;
    protected $fecha_modificacion;
    protected $activo;
    protected $eliminado;

    public function __construct()
    {
        parent::__construct('animales_inca');
    }

    public function getUrlAnimal()
    {
        $user = $this->obtenerUsuario();
        $role = "profesional";
        if ($user->getRole() == 'Particular') {
            $role = 'particular';
        }
        $users = Ayuda::urlAmigable($user->getUsuario());
        $raza = Ayuda::urlAmigable($this->raza);
        return base_url("{$role}/{$users}/{$raza}-{$this->referencia}");
    }

    public function obtenerUsuario()
    {
        $user = new UsuarioEntity();
        $user->setId($this->fk_usuario);
        $user = $user->buscarPorPk();
        return $user;
    }

    public function getUrlPanel()
    {
        $usuario = $this->obtenerUsuario();
        if ($usuario->getRole() == 'Particular') {
            return '#';
        }
        $url = Ayuda::urlAmigable($usuario->getUsuario());

        return base_url("profesional/{$url}-$this->fk_usuario/");
    }

    public function getReferencia()
    {
        return $this->referencia;
    }

    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function getRaza()
    {
        return $this->raza;
    }

    public function setRaza($raza)
    {
        $this->raza = $raza;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    public function getFecha_entrada($actualmente = false)
    {
        if (!$actualmente) {
            return $this->fecha_entrada;
        }
        return Ayuda::time_passed($this->fecha_entrada);
    }

    public function setFecha_entrada($fecha_entrada)
    {
        $this->fecha_entrada = $fecha_entrada;
    }

    public function getFecha_modificacion($actualmente = false)
    {
        if (!$actualmente) {
            return $this->fecha_modificacion;
        }
        return Ayuda::time_passed($this->fecha_modificacion);
    }

    public function setFecha_modificacion($fecha_modificacion)
    {
        $this->fecha_modificacion = $fecha_modificacion;
    }

    public function getFk_estado()
    {
        return $this->fk_estado;
    }

    public function setFk_estado($fk_estado)
    {
        $this->fk_estado = $fk_estado;
    }

    public function getFk_usuario()
    {
        return $this->fk_usuario;
    }

    public function setFk_usuario($fk_usuario)
    {
        $this->fk_usuario = $fk_usuario;
    }

    public function getFoto()
    {
        return str_replace('?w=113', '?w=300', $this->foto);
    }

    public function setFoto($foto)
    {
        $this->foto = $foto;
    }


    /**
     * @return mixed
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * @param mixed $activo
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;
    }

    /**
     * @return mixed
     */
    public function getEliminado()
    {
        return $this->eliminado;
    }

    /**
     * @param mixed $eliminado
     */
    public function setEliminado($eliminado)
    {
        $this->eliminado = $eliminado;
    }

}

?>