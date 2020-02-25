<?php 
class TarifaEntity extends Entity{
    protected $id;
	protected $empresa;
	protected $tarifa;
	protected $precio;
	protected $activo;

    public function __construct(){
        parent::__construct('tarifas');
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

	public function getEmpresa(){
    	return $this->empresa;
	}

	public function setEmpresa($empresa){
    	$this->empresa = $empresa;
	}

	public function getTarifa(){
    	return $this->tarifa;
	}

	public function setTarifa($tarifa){
    	$this->tarifa = $tarifa;
	}

	public function getPrecio(){
    	return $this->precio;
	}

	public function setPrecio($precio){
    	$this->precio = $precio;
	}

	public function getActivo(){
    	return $this->activo;
	}

	public function setActivo($activo){
    	$this->activo = $activo;
	}

}
?>