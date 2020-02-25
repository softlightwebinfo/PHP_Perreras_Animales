<?php 
class AnimaleProcedimientoEntity extends Entity{
	protected $fk_animal;
	protected $fk_procedimiento;
	protected $activo;

    public function __construct(){
        parent::__construct('animales_procedimientos');
    }

	public function getFk_animal(){
    	return $this->fk_animal;
	}

	public function setFk_animal($fk_animal){
    	$this->fk_animal = $fk_animal;
	}

	public function getFk_procedimiento(){
    	return $this->fk_procedimiento;
	}

	public function setFk_procedimiento($fk_procedimiento){
    	$this->fk_procedimiento = $fk_procedimiento;
	}

	public function getActivo(){
    	return $this->activo;
	}

	public function setActivo($activo){
    	$this->activo = $activo;
	}

}
?>