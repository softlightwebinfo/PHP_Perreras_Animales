<?php
/**
 * Created by PhpStorm.
 * User: codeunic
 * Date: 14/07/2017
 * Time: 21:18
 */

class ActividadesEmpresaModel extends Model implements SQL_model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get()
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
        ORM::select('nombre');
        ORM::from('actividad_empresa');
        $query = ORM::build();

        return $query;
    }

    public function truncate()
    {
        // TODO: Implement truncate() method.
    }
}