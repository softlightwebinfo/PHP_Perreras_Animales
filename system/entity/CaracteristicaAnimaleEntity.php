<?php 
class CaracteristicaAnimaleEntity extends Entity{
	protected $fk_animal;
	protected $fk_caracteristica;

    public function __construct(){
        parent::__construct('caracteristicas_animales');
    }

	public function getFk_animal(){
    	return $this->fk_animal;
	}

	public function setFk_animal($fk_animal){
    	$this->fk_animal = $fk_animal;
	}

	public function getFk_caracteristica(){
    	return $this->fk_caracteristica;
	}

	public function setFk_caracteristica($fk_caracteristica){
    	$this->fk_caracteristica = $fk_caracteristica;
	}

}
?>