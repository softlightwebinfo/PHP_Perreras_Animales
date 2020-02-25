<?php 
class EmpresaEntity extends Entity{
	protected $fk_usuario;
	protected $cif;
	protected $direccion;
	protected $telefono;
	protected $fax;
	protected $fk_actividad_empresa;
	protected $logo;

    public function __construct(){
        parent::__construct('empresas');
    }

	public function getFk_usuario(){
    	return $this->fk_usuario;
	}

	public function setFk_usuario($fk_usuario){
    	$this->fk_usuario = $fk_usuario;
	}

	public function getCif(){
    	return $this->cif;
	}

	public function setCif($cif){
    	$this->cif = $cif;
	}

	public function getDireccion(){
    	return $this->direccion;
	}

	public function setDireccion($direccion){
    	$this->direccion = $direccion;
	}

	public function getTelefono(){
    	return $this->telefono;
	}

	public function setTelefono($telefono){
    	$this->telefono = $telefono;
	}

	public function getFax(){
    	return $this->fax;
	}

	public function setFax($fax){
    	$this->fax = $fax;
	}

	public function getFk_actividad_empresa(){
    	return $this->fk_actividad_empresa;
	}

	public function setFk_actividad_empresa($fk_actividad_empresa){
    	$this->fk_actividad_empresa = $fk_actividad_empresa;
	}

	public function getLogo(){
    	return $this->logo;
	}

	public function setLogo($logo){
    	$this->logo = $logo;
	}

}
?>