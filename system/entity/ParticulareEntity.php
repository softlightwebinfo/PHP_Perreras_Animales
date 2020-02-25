<?php 
class ParticulareEntity extends Entity{
	protected $dni;
	protected $fk_usuario;
	protected $telefono;
	protected $fecha_nacimiento;
	protected $domicilio;
	protected $foto;

    public function __construct(){
        parent::__construct('particulares');
    }

	public function getDni(){
    	return $this->dni;
	}

	public function setDni($dni){
    	$this->dni = $dni;
	}

	public function getFk_usuario(){
    	return $this->fk_usuario;
	}

	public function setFk_usuario($fk_usuario){
    	$this->fk_usuario = $fk_usuario;
	}

	public function getTelefono(){
    	return $this->telefono;
	}

	public function setTelefono($telefono){
    	$this->telefono = $telefono;
	}

	public function getFecha_nacimiento(){
    	return $this->fecha_nacimiento;
	}

	public function setFecha_nacimiento($fecha_nacimiento){
    	$this->fecha_nacimiento = $fecha_nacimiento;
	}

	public function getDomicilio(){
    	return $this->domicilio;
	}

	public function setDomicilio($domicilio){
    	$this->domicilio = $domicilio;
	}

	public function getFoto(){
    	return $this->foto;
	}

	public function setFoto($foto){
    	$this->foto = $foto;
	}

}
?>