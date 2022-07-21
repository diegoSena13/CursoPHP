<?php

//modelo correspondiente
class LibroModel
{
    private $db;
    public function __construct()
    {
        $this->db=new Dbase;
    }
    public function listarLibro(){
        $this->db->query("select * from cliente");
        $resultSet= $this->db->getAll();
        return $resultSet;
    }
    public function InsertarLibro(){
        $this->db->query("insert into cliente (idUsuario,nombre,apellido1,apellido2,correo,telefono,direccion) values ()");
        $resultSet= $this->db->getAll();
        return $resultSet;
    }
    public function EditarLibro(){
        $this->db->query("insert into cliente (idUsuario,nombre,apellido1,apellido2,correo,telefono,direccion) values ()");
        $resultSet= $this->db->getAll();
        return $resultSet;
    }
    public function Eliminarlibro(){
        $this->db->query("insert into cliente (idUsuario,nombre,apellido1,apellido2,correo,telefono,direccion) values ()");
        $resultSet= $this->db->getAll();
        return $resultSet;
    }
}