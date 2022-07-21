<?php

//modelo correspondiente
class EstudianteModel
{
    private $db;
    public function __construct()
    {
        $this->db=new Dbase;
    }
    public function listarEstudiantes(){
        $this->db->query("SELECT * FROM `cliente`");
        $resultSet= $this->db->getAll();
        return $resultSet;
    }
    public function InsertarEstudiante(){
        $this->db->query("insert into cliente (idUsuario,nombre,apellido1,apellido2,correo,telefono,direccion) values ()");
        $resultSet= $this->db->getAll();
        return $resultSet;
    }
    public function EditarEstudiante(){
        $this->db->query("insert into cliente (idUsuario,nombre,apellido1,apellido2,correo,telefono,direccion) values ()");
        $resultSet= $this->db->getAll();
        return $resultSet;
    }
    public function EliminarEstudiante(){
        $this->db->query("insert into cliente (idUsuario,nombre,apellido1,apellido2,correo,telefono,direccion) values ()");
        $resultSet= $this->db->getAll();
        return $resultSet;
    }
}