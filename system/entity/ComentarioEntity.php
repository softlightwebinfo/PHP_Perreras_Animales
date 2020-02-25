<?php 
class ComentarioEntity extends Entity{
	protected $id;
	protected $fk_usuario;
	protected $pregunta;
	protected $fecha_creacion;

    public function __construct(){
        parent::__construct('comentarios');
    }

	public function getId(){
    	return $this->id;
	}

	public function setId($id){
    	$this->id = $id;
	}

	public function getFk_usuario(){
    	return $this->fk_usuario;
	}

	public function setFk_usuario($fk_usuario){
    	$this->fk_usuario = $fk_usuario;
	}

	public function getPregunta(){
    	return $this->pregunta;
	}

	public function setPregunta($pregunta){
    	$this->pregunta = $pregunta;
	}

	public function getFecha_creacion(){
    	return $this->fecha_creacion;
	}

	public function setFecha_creacion($fecha_creacion){
    	$this->fecha_creacion = $fecha_creacion;
	}

}
?>