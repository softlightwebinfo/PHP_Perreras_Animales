<?php 
class RespuestaComentarioEntity extends Entity{
	protected $id;
	protected $fk_comentario;
	protected $fk_usuario;
	protected $respuesta;
	protected $fecha_creacion;

    public function __construct(){
        parent::__construct('respuesta_comentarios');
    }

	public function getId(){
    	return $this->id;
	}

	public function setId($id){
    	$this->id = $id;
	}

	public function getFk_comentario(){
    	return $this->fk_comentario;
	}

	public function setFk_comentario($fk_comentario){
    	$this->fk_comentario = $fk_comentario;
	}

	public function getFk_usuario(){
    	return $this->fk_usuario;
	}

	public function setFk_usuario($fk_usuario){
    	$this->fk_usuario = $fk_usuario;
	}

	public function getRespuesta(){
    	return $this->respuesta;
	}

	public function setRespuesta($respuesta){
    	$this->respuesta = $respuesta;
	}

	public function getFecha_creacion(){
    	return $this->fecha_creacion;
	}

	public function setFecha_creacion($fecha_creacion){
    	$this->fecha_creacion = $fecha_creacion;
	}

}
?>