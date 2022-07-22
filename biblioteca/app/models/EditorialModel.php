<?php

//modelo correspondiente
class EditorialModel
{
    private $db;
    public function __construct()
    {
        $this->db=new Dbase;
    }
    public function listarEditorial(){
        $this->db->query("SELECT * FROM `editorial`");
        $resultSet= $this->db->getAll();
        return $resultSet;
    }
    public function InsertarEditorial(){
        $this->db->query("insert into editorial (nit,nombre,generosProduce,tipo,ubicacion) values ()");
        $resultSet= $this->db->getAll();
        return $resultSet;
    }
    public function EditarEditorial(){
        $this->db->query("insert into cliente (idUsuario,nombre,apellido1,apellido2,correo,telefono,direccion) values ()");
        $resultSet= $this->db->getAll();
        return $resultSet;
    }
    public function EliminarEditorial(){
        $this->db->query("insert into cliente (idUsuario,nombre,apellido1,apellido2,correo,telefono,direccion) values ()");
        $resultSet= $this->db->getAll();
        return $resultSet;
    }
}