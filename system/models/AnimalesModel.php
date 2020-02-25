<?php

/**
 * Created by PhpStorm.
 * User: codeunic
 * Date: 14/07/2017
 * Time: 21:18
 */
class AnimalesModel extends Model implements SQL_model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get($idAnimal)
    {
        $animales = new AnimaleEntity();
        $animalesPalma = new AnimalePalmaEntity();
        $where = null;

        $where = "WHERE referencia='{$idAnimal}'";

        $queryTotal = "SELECT activo,eliminado,referencia,
fecha_modificacion,raza,tipo,
fecha_entrada,fk_estado,fk_usuario,foto,
descripcion,claseObject from 
(SELECT p1.activo,p1.eliminado,
 p1.referencia,p1.fecha_modificacion,
 p1.raza,p1.tipo,p1.fecha_entrada,
 p1.fk_estado,p1.fk_usuario,p1.foto,
 p1.descripcion,'AnimalePalmaEntity' as claseObject from 
 {$animalesPalma->getTable()} p1 UNION 
 SELECT p2.activo,p2.eliminado, p2.referencia,
 p2.fecha_modificacion,p2.raza,p2.tipo,
 p2.fecha_entrada,p2.fk_estado,p2.fk_usuario,
 p2.foto,p2.descripcion,'AnimaleEntity' as claseObject from 
 {$animales->getTable()} p2) results {$where} 
 ORDER BY fecha_modificacion DESC ";

        $queryCount = ORM::sql($queryTotal)->rowCount();
        $queryLimit = ORM::sql($queryTotal);

        $row = $queryLimit->fetch(PDO::FETCH_OBJ);
        $anuncio = new $row->claseObject();
        $anuncio->setearCampos(array(
            'referencia' => $row->referencia,
            'fecha_modificacion' => $row->fecha_modificacion,
            'raza' => $row->raza,
            'tipo' => $row->tipo,
            'fecha_entrada' => $row->fecha_entrada,
            'fk_estado' => $row->fk_estado,
            'fk_usuario' => $row->fk_usuario,
            'foto' => $row->foto,
            'descripcion' => $row->descripcion
        ));
        return $anuncio;
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

    public function getAll($all = false, $limit = null, int $fk_user = null, $paginator = false, $activo = true, $eliminado = false, $filter = array())
    {
        $animales = new AnimaleEntity();
        $animalesPalma = new AnimalePalmaEntity();
        $animaleInca = new AnimaleIncaEntity();
        $where = null;
        if (!is_null($fk_user)) {
            $where = "WHERE fk_usuario={$fk_user}";
        }

        //anuncios pendientes
        if ($activo == false and $eliminado == false) {
            if (!is_null($where)) {
                $where .= " AND (activo IS NULL AND eliminado IS NULL)";
            } else {
                $where = "WHERE (activo IS NULL AND eliminado IS NULL)";
            }
            //sacamos anuncios activos
        } elseif ($activo == true and $eliminado == false) {
            if (!is_null($where)) {
                $where .= " AND (activo IS NOT NULL AND eliminado IS NULL)";
            } else {
                $where = "WHERE (activo IS NOT NULL AND eliminado IS NULL)";
            }
            //anuncios eliminados tanto activos como pendientes
        } elseif ($eliminado == true) {
            if (is_null($where)) {
                $where = "WHERE eliminado IS NOT NULL";
            } else {
                $where .= " AND eliminado IS NOT NULL";
            }
        }

        if (count($filter)) {
            $where .= ' and ';
            foreach ($filter as $l => $itm) {
                $where .= " {$l}='$itm' and ";
            }
            $where = trim($where, ' and ');
        }

        if ($all === true) {
            $queryTotal = "SELECT activo,eliminado,referencia,fecha_modificacion,raza,tipo,fecha_entrada,fk_estado,fk_usuario,foto,descripcion,claseObject from (SELECT p1.activo,p1.eliminado, p1.referencia,p1.fecha_modificacion,p1.raza,p1.tipo,p1.fecha_entrada,p1.fk_estado,p1.fk_usuario,p1.foto,p1.descripcion,'AnimalePalmaEntity' as claseObject from {$animalesPalma->getTable()} p1 UNION SELECT p2.activo,p2.eliminado, p2.referencia,p2.fecha_modificacion,p2.raza,p2.tipo,p2.fecha_entrada,p2.fk_estado,p2.fk_usuario,p2.foto,p2.descripcion,'AnimaleEntity' as claseObject from {$animales->getTable()} p2 UNION SELECT p3.activo,p3.eliminado, p3.referencia,p3.fecha_modificacion,p3.raza,p3.tipo,p3.fecha_entrada,p3.fk_estado,p3.fk_usuario,p3.foto,p3.descripcion,'AnimaleIncaEntity' as claseObject from {$animaleInca->getTable()} p3) results {$where} ORDER BY fecha_modificacion DESC ";
        } else {
            $queryTotal = "SELECT *, 'AnimaleEntity' as claseObject FROM cu_animales {$where} ORDER BY fecha_entrada DESC";
        }
        $queryCount = ORM::sql($queryTotal)->rowCount();

        if ($paginator) {
            return $queryCount;
        }
//        print_pre($limit);
        if (!is_null($limit)) {
            $queryLimit = $queryTotal .= " LIMIT {$limit}";
            $queryLimit = ORM::sql($queryLimit);
        } else {
            $queryLimit = ORM::sql($queryTotal);
        }
        $queryLimit = $queryLimit->fetchAll(PDO::FETCH_OBJ);
//        exit;
        $anuncios = array(
            'anuncios' => array(),
            'lenght' => 0
        );
        foreach ($queryLimit as $key => $row) {
            $object = $row->claseObject;
            $anuncio = new $object();
            $anuncio->setearCampos(array(
                'referencia' => $row->referencia,
                'fecha_modificacion' => $row->fecha_modificacion,
                'raza' => $row->raza,
                'tipo' => $row->tipo,
                'fecha_entrada' => $row->fecha_entrada,
                'fk_estado' => $row->fk_estado,
                'fk_usuario' => $row->fk_usuario,
                'foto' => $row->foto,
                'descripcion' => $row->descripcion
            ));
            array_push($anuncios['anuncios'], $anuncio);
        }
        $anuncios['lenght'] = $queryCount;
        return $anuncios;
    }

    public function truncate()
    {
        // TODO: Implement truncate() method.
    }

    public function similares($idUsuario, $limit = null, $random = false)
    {
        $animales = new AnimaleEntity();
        $animalesPalma = new AnimalePalmaEntity();
        $where = null;
        $rand = null;
        if (!is_null($idUsuario)) {
            $where = "WHERE fk_usuario={$idUsuario}";
        }
        if ($random) {
            $rand .= ',rand()';
        }
        $queryTotal = "SELECT referencia,fecha_modificacion,raza,tipo,fecha_entrada,fk_estado,fk_usuario,foto,descripcion,claseObject from (SELECT p1.referencia,p1.fecha_modificacion,p1.raza,p1.tipo,p1.fecha_entrada,p1.fk_estado,p1.fk_usuario,p1.foto,p1.descripcion,'AnimalePalmaEntity' as claseObject from {$animalesPalma->getTable()} p1 UNION SELECT p2.referencia,p2.fecha_modificacion,p2.raza,p2.tipo,p2.fecha_entrada,p2.fk_estado,p2.fk_usuario,p2.foto,p2.descripcion,'AnimaleEntity' as claseObject from {$animales->getTable()} p2) results {$where} ORDER BY fecha_modificacion DESC {$rand}";
        $queryCount = ORM::sql($queryTotal)->rowCount();
        if (!is_null($limit)) {
            $queryLimit = $queryTotal .= "LIMIT {$limit}";
        } else {
            $queryLimit = $queryTotal;
        }


        $queryLimit = ORM::sql($queryTotal);

        $queryLimit = $queryLimit->fetchAll(PDO::FETCH_OBJ);
        $anuncios = array();

        foreach ($queryLimit as $key => $row) {
            $anuncio = new $row->claseObject();
            $anuncio->setearCampos(array(
                'referencia' => $row->referencia,
                'fecha_modificacion' => $row->fecha_modificacion,
                'raza' => $row->raza,
                'tipo' => $row->tipo,
                'fecha_entrada' => $row->fecha_entrada,
                'fk_estado' => $row->fk_estado,
                'fk_usuario' => $row->fk_usuario,
                'foto' => $row->foto,
                'descripcion' => $row->descripcion
            ));
            array_push($anuncios, $anuncio);
        }

        return $anuncios;
    }

}