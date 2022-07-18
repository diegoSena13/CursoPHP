<?php

//modelo correspondiente
class PacienteModel
{
    private $db;
    public function __construct()
    {
        $this->db=new Dbase;
    }
    public function listar(){
        $this->db->query("select * from pacientes");
        $resultSet= $this->db->getAll();
        return $resultSet;
    }
}