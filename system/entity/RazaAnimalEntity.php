<?php 
class RazaAnimalEntity extends Entity{
	protected $raza;
	protected $tipo;

    public function __construct(){
        parent::__construct('raza_animal');
    }

	public function getRaza(){
    	return $this->raza;
	}

	public function setRaza($raza){
    	$this->raza = $raza;
	}

	public function getTipo(){
    	return $this->tipo;
	}

	public function setTipo($tipo){
    	$this->tipo = $tipo;
	}

}
?>