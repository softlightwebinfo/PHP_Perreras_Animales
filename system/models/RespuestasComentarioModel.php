<?php
/**
 * Created by PhpStorm.
 * User: codeunic
 * Date: 14/07/2017
 * Time: 21:18
 */

class RespuestasComentarioModel extends Model implements SQL_model
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
        ORM::select('id, fk_comentario, fk_usuario, respuesta, fecha_creacion');
        ORM::from('respuesta_comentarios');
        $query = ORM::build();

        return $query;
    }


    public function truncate()
    {
        // TODO: Implement truncate() method.
    }
}