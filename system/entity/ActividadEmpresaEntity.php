<?php 
class ActividadEmpresaEntity extends Entity{
	protected $nombre;

    public function __construct(){
        parent::__construct('actividad_empresa');
    }

	public function getNombre(){
    	return $this->nombre;
	}

	public function setNombre($nombre){
    	$this->nombre = $nombre;
	}

}
?>