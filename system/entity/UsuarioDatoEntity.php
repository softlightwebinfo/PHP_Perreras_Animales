<?php 
class UsuarioDatoEntity extends Entity{
	protected $fk_usuario;
	protected $biografia;
	protected $socialFacebook;
	protected $socialYoutube;
	protected $socialTwitter;
	protected $socialGooglePlus;
	protected $socialInstagram;

    public function __construct(){
        parent::__construct('usuarios_datos');
    }

	public function getFk_usuario(){
    	return $this->fk_usuario;
	}

	public function setFk_usuario($fk_usuario){
    	$this->fk_usuario = $fk_usuario;
	}

	public function getBiografia(){
    	return $this->biografia;
	}

	public function setBiografia($biografia){
    	$this->biografia = $biografia;
	}

	public function getSocialFacebook(){
    	return $this->socialFacebook;
	}

	public function setSocialFacebook($socialFacebook){
    	$this->socialFacebook = $socialFacebook;
	}

	public function getSocialYoutube(){
    	return $this->socialYoutube;
	}

	public function setSocialYoutube($socialYoutube){
    	$this->socialYoutube = $socialYoutube;
	}

	public function getSocialTwitter(){
    	return $this->socialTwitter;
	}

	public function setSocialTwitter($socialTwitter){
    	$this->socialTwitter = $socialTwitter;
	}

	public function getSocialGooglePlus(){
    	return $this->socialGooglePlus;
	}

	public function setSocialGooglePlus($socialGooglePlus){
    	$this->socialGooglePlus = $socialGooglePlus;
	}

	public function getSocialInstagram(){
    	return $this->socialInstagram;
	}

	public function setSocialInstagram($socialInstagram){
    	$this->socialInstagram = $socialInstagram;
	}

}
?>