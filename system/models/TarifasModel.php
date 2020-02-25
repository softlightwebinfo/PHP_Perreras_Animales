<?php

    /**
     * Created by PhpStorm.
     * User: codeunic
     * Date: 14/07/2017
     * Time: 21:18
     */
    class TarifasModel extends Model implements SQL_model
    {
        public function __construct()
        {
            parent::__construct();
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
            $tarifa = new TarifaEntity();
            $tratamiento = new TratamientoEntity();
            ORM::select('e.*, t.nombre as tarifa,e.precio,e.empresa,t.id');
            ORM::FROM($tratamiento->getTable(true) . " t");
            ORM::join("{$tarifa->getTable(true)} e", 't.id=e.tarifa', ORM::JOIN_LEFT);
            $query = ORM::build();

            $query = $query->object('Tarifa');
            return $query;
        }

        public function truncate()
        {
            // TODO: Implement truncate() method.
        }
    }