<?php

//modelo correspondiente
class MedicoModel
{
    private $db;
    public function __construct()
    {
        $this->db=new Dbase;
    }
    public function listar(){
        $this->db->query("select * from medico");
        $resultSet= $this->db->getAll();
        return $resultSet;
    }
}