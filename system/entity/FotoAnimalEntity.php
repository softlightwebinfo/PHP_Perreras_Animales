<?php 
class FotoAnimalEntity extends Entity{
	protected $fk_animal;
	protected $foto;

    public function __construct(){
        parent::__construct('fotos_animal');
    }

	public function getFk_animal(){
    	return $this->fk_animal;
	}

	public function setFk_animal($fk_animal){
    	$this->fk_animal = $fk_animal;
	}

	public function getFoto(){
    	return $this->foto;
	}

	public function setFoto($foto){
    	$this->foto = $foto;
	}

}
?>