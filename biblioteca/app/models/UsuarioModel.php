<?php

//modelo correspondiente
class UsuarioModel
{
    private $db;
    public function __construct()
    {
        $this->db=new Dbase;
    }
    // función para consultar en la base de datos si existe el usuario
    public function Login()
    {
        $correo = $_POST['correo'];
        $telefono = $_POST['telefono'];

        $this->db->query("SELECT * FROM usuario
        INNER JOIN rol on usuario.rol_idRol = rol.idRol
        where correo='$correo' and telefono='$telefono'");
      /*   $this->db->bind(':correo', $data['correo']);
        $this->db->bind(':telefono', $data['telefono']); */

        $cantidad= $this->db->rowCount();
        if ($cantidad > 0){
            $resultSet = $this->db->getOne();
            return $resultSet;
        } else{
            return "vacio";
        }
        
    }
}