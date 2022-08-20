<?php

//modelo correspondiente
class UsuarioModel
{
    private $db;
    public function __construct()
    {
        $this->db=new Dbase;
    }  
    /**
     * Login
     * función para consultar en la base de datos si existe el usuario   
     * @param  mixed $data
     * @return void
     */
    public function Login($data)
    {
        $this->db->query("SELECT * FROM usuario
        where correo=:correo and telefono=:telefono");
        $this->db->bind(':correo', $data['correo']);
        $this->db->bind(':telefono', $data['telefono']);
        $resultSet = $this->db->getOne();
        return $resultSet;

        /* $cantidad= $this->db->rowCount();
        if ($cantidad > 0){
            $resultSet = $this->db->getOne();
            return $resultSet;
        } else{
            return "vacio";
        } */
        
    }
}