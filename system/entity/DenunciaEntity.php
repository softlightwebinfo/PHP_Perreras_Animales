<?php 
class DenunciaEntity extends Entity{
	protected $id;
	protected $nombre;
	protected $fk_provincia;
	protected $fk_municipio;
	protected $direccion;
	protected $foto;
	protected $mensaje;
	protected $fk_usuario;
	protected $fecha_creacion;

    public function __construct(){
        parent::__construct('denuncias');
    }

	public function getId(){
    	return $this->id;
	}

	public function setId($id){
    	$this->id = $id;
	}

	public function getNombre(){
    	return $this->nombre;
	}

	public function setNombre($nombre){
    	$this->nombre = $nombre;
	}

	public function getFk_provincia(){
    	return $this->fk_provincia;
	}

	public function setFk_provincia($fk_provincia){
    	$this->fk_provincia = $fk_provincia;
	}

	public function getFk_municipio(){
    	return $this->fk_municipio;
	}

	public function setFk_municipio($fk_municipio){
    	$this->fk_municipio = $fk_municipio;
	}

	public function getDireccion(){
    	return $this->direccion;
	}

	public function setDireccion($direccion){
    	$this->direccion = $direccion;
	}

	public function getFoto(){
    	return $this->foto;
	}

	public function setFoto($foto){
    	$this->foto = $foto;
	}

	public function getMensaje(){
    	return $this->mensaje;
	}

	public function setMensaje($mensaje){
    	$this->mensaje = $mensaje;
	}

	public function getFk_usuario(){
    	return $this->fk_usuario;
	}

	public function setFk_usuario($fk_usuario){
    	$this->fk_usuario = $fk_usuario;
	}

	public function getFecha_creacion(){
    	return $this->fecha_creacion;
	}

	public function setFecha_creacion($fecha_creacion){
    	$this->fecha_creacion = $fecha_creacion;
	}

}
?>