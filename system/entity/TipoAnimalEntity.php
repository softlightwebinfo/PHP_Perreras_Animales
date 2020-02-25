<?php 
class TipoAnimalEntity extends Entity{
	protected $tipo;

    public function __construct(){
        parent::__construct('tipo_animal');
    }

	public function getTipo(){
    	return $this->tipo;
	}

	public function setTipo($tipo){
    	$this->tipo = $tipo;
	}

}
?>