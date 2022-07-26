<?php

//modelo correspondiente
class PrestamoModel
{
    private $db;
    public function __construct()
    {
        $this->db=new Dbase;
    }
    public function listarPrestamo(){
        $this->db->query("select * from ");
        $resultSet= $this->db->getAll();
        return $resultSet;
    }
    public function insertarPrestamo(){
        $this->db->query("select * from medico");
        $resultSet= $this->db->getAll();
        return $resultSet;
    }
}