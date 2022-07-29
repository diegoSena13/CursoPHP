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
        $this->db->query("SELECT * FROM `libro`");
        $resultSet= $this->db->getAll();
        return $resultSet;
    }
    public function getOne($nit)
    {
        $this->db->query("SELECT * FROM `libro` WHERE id=:id");
        $this->db->bind(':nit', $nit);
        $resultSet = $this->db->getOne();
        return $resultSet;
    }
    public function InsertarLibro(){
        $this->db->query("insert into libro (id,titulo,autor,descripcion,categoria,editorial,fechaSalidadLibro,cantidad,existencia,editorial_nit) values ()");
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