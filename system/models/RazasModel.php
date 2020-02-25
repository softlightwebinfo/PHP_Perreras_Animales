<?php
/**
 * Created by PhpStorm.
 * User: codeunic
 * Date: 19/07/2017
 * Time: 19:26
 */

class RazasModel extends Model implements SQL_model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getAllTipo($tipoAnimal)
    {
        $animal = new RazaAnimalEntity();
        $tabla = $animal->getTable(true);

        ORM::select('raza,tipo');
        ORM::from($tabla);
        ORM::where('tipo', $tipoAnimal);
        $st = ORM::build();

        if ($st->num_rows() > 0) {
            return $st->object('RazaAnimal');
        }
        return array();
    }

    public function get($id)
    {
        // TODO: Implement get() method.
    }

    public function remove()
    {
        // TODO: Implement remove() method.
    }

    public function update()
    {
        // TODO: Implement update() method.
    }

    public function create()
    {
        // TODO: Implement create() method.
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
    }

    public function truncate()
    {
        // TODO: Implement truncate() method.
    }
}