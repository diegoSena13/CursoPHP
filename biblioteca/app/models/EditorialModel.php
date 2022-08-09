<?php

//modelo correspondiente
class EditorialModel
{
    private $db;
    public function __construct()
    {
        $this->db = new Dbase;
    }
    // función para traer todos los editoriales
    public function listarEditorial()
    {
        $this->db->query("SELECT * FROM `editorial`");
        $resultSet = $this->db->getAll();
        return $resultSet;
    }
    // funcion para traer un editorial
    public function getOne($nit)
    {
        $this->db->query("SELECT * FROM `editorial` WHERE nit=:nit");
        $this->db->bind(':nit', $nit);
        $resultSet = $this->db->getOne();
        return $resultSet;
    }
    // función para insertar un editorial
    public function InsertarEditorial($data)
    {
        $this->db->query("insert into editorial (nit,nombre,generosProduce,tipo,ubicacion) values (:nit,:nombre,:generosProduce,:tipo,:ubicacion)");
        $this->db->bind(':nit', $data['nit']);
        $this->db->bind(':nombre', $data['nombre']);
        $this->db->bind(':generosProduce', $data['generosProduce']);
        $this->db->bind(':tipo', $data['tipo']);
        $this->db->bind(':ubicacion', $data['ubicacion']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    // función para editar un editorial
    public function EditarEditorial($data)
    {
        $this->db->query('UPDATE editorial SET nombre=:nombre,
        generosProduce=:generosProduce,tipo=:tipo,
        ubicacion=:ubicacion WHERE nit=:nit       
        ');
        //vinculacion de los datos
        $this->db->bind(':nit', $data['nit']);
        $this->db->bind(':nombre', $data['nombre']);
        $this->db->bind(':generosProduce', $data['generosProduce']);
        $this->db->bind(':tipo', $data['tipo']);
        $this->db->bind(':ubicacion', $data['ubicacion']);

        // ejecucion de la consulta

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    //función para eliminar un editorial
    public function EliminarEditorial($data)
    {
        $this->db->query('DELETE FROM editorial WHERE nit = :nit');
        //vinculacion de los datos
        $this->db->bind(':nit', $data['nit']);

        // ejecucion de la consulta

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
