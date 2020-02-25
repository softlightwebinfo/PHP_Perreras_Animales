<?php 
class EstadoEntity extends Entity{
	protected $tipo;

    public function __construct(){
        parent::__construct('estados');
    }

	public function getTipo(){
    	return $this->tipo;
	}

	public function setTipo($tipo){
    	$this->tipo = $tipo;
	}

}
?>