<?php 
class ConfigEntity extends Entity{
	protected $id;
	protected $title;
	protected $email;
	protected $privacidad;
	protected $ky;

    public function __construct(){
        parent::__construct('config');
    }

	public function getId(){
    	return $this->id;
	}

	public function setId($id){
    	$this->id = $id;
	}

	public function getTitle(){
    	return $this->title;
	}

	public function setTitle($title){
    	$this->title = $title;
	}

	public function getEmail(){
    	return $this->email;
	}

	public function setEmail($email){
    	$this->email = $email;
	}

	public function getPrivacidad(){
    	return $this->privacidad;
	}

	public function setPrivacidad($privacidad){
    	$this->privacidad = $privacidad;
	}

	public function getKy(){
    	return $this->ky;
	}

	public function setKy($ky){
    	$this->ky = $ky;
	}

}
?>