<?php 
class CaracteristicaEntity extends Entity{
	protected $nombre;
	protected $slug;

    public function __construct(){
        parent::__construct('caracteristicas');
    }

    /**
     * @return mixed
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param mixed $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

	public function getNombre(){
    	return $this->nombre;
	}

	public function setNombre($nombre){
    	$this->nombre = $nombre;
	}

}
?>