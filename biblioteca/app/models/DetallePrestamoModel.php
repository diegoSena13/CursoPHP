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
        $this->db->query("select * from detallePrestamo ");
        $resultSet= $this->db->getAll();
        return $resultSet;
    }
}