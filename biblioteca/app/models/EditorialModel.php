<?php

//modelo correspondiente
class EditorialModel
{
    private $db;
    public function __construct()
    {
        $this->db = new Dbase; 
    }
    
    /** 
     * listarEditorial
     * función para traer todos los editoriales
     *
     * @return void
     */
    public function listarEditorial()
    {
        $this->db->query("SELECT nit FROM `editorial`");
        $resultSet = $this->db->getAll();
        return $resultSet;
    }    
    public function getTable()
    {
        $this->db->query("SELECT nit,nombre,generosProduce,tipo,ubicacion FROM `editorial`");
        $resultSet = $this->db->getAll();
        return $resultSet;
    }
     /**
      * getOne
      * funcion para traer un editorial
      *
      * @param  mixed $nit
      * @return void
      */
     public function getOne($nit)
    {
        $this->db->query("SELECT * FROM `editorial` WHERE nit=:nit");
        $this->db->bind(':nit', $nit);
        $resultSet = $this->db->getOne();
        return $resultSet;
    }
    /**
     * InsertarEditorial
     * función para insertar un editorial
     *
     * @param  mixed $data
     * @return void
     */
    public function InsertarEditorial($nit,$nombre,$generosProduce,$tipo,$ubicacion)
    {
        $this->db->query("insert into editorial (nit,nombre,generosProduce,tipo,ubicacion) values (:nit,:nombre,:generosProduce,:tipo,:ubicacion)");
        $this->db->bind(':nit', $nit);
        $this->db->bind(':nombre', $nombre);
        $this->db->bind(':generosProduce', $generosProduce);
        $this->db->bind(':tipo', $tipo);
        $this->db->bind(':ubicacion', $ubicacion);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    //    
    /**
     * EditarEditorial
     * función para editar un editorial 
     * @param  mixed $data
     * @return void
     */
    public function EditarEditorial($nit,$nombre,$generosProduce,$tipo,$ubicacion)
    {
        $this->db->query('UPDATE editorial SET nombre=:nombre,
        generosProduce=:generosProduce,tipo=:tipo,
        ubicacion=:ubicacion WHERE nit=:nit       
        ');
        //vinculacion de los datos
        $this->db->bind(':nit', $nit);
        $this->db->bind(':nombre', $nombre);
        $this->db->bind(':generosProduce', $generosProduce);
        $this->db->bind(':tipo', $tipo);
        $this->db->bind(':ubicacion', $ubicacion);

        // ejecucion de la consulta

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    } 
    /**
     * EliminarEditorial
     * función para eliminar un editorial 
     * @param  mixed $data
     * @return void
     */
    public function EliminarEditorial($nit)
    {
        $this->db->query('DELETE FROM editorial WHERE nit = :nit');
        //vinculacion de los datos
        $this->db->bind(':nit', $nit);

        // ejecucion de la consulta

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    
    /**
     * search
     * funcion para buscar editoriales por nombre
     * @param  mixed $data
     * @return void
     */
    public function search($data)
    {
        $this->db->query("SELECT * FROM editorial WHERE nombre LIKE CONCAT(:nombre,'%')");
        $nombre = $data['nombre'];
        $this->db->bind(':nombre', $nombre);
        $resultSet = $this->db->getAll();
        return $resultSet;
    }
    
    /**
     * totalEditoriales
     * 
     * @return void
     */
    public function totalEditoriales()
    {
        $this->db->query("SELECT COUNT(nit) as numevents FROM editorial");
        $resultSet = $this->db->getOne();
        return  $resultSet;
    }


    /**
     * totalPages
     * devuelve el total de paginas de acuerdo al limite y al offset
     * @param  mixed $perPage
     * @param  mixed $offset
     * @return void
     */
    public function totalPages($perPage, $offset)
    {
        $this->db->query("SELECT * from editorial ORDER BY nit ASC LIMIT :limit OFFSET :offset");
        $this->db->bind(":limit", $perPage);
        $this->db->bind(":offset", $offset);
        $resultSet = $this->db->getAll();
        return $resultSet;
    }
}
