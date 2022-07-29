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
    public function getOne($id)
    {
        $this->db->query("SELECT * FROM cliente where idUsuario =:id");
        $this->db->bind(':id', $id);
        $resultSet = $this->db->getOne();
        return $resultSet;
    }
    public function insertarEstudiante($data)
    {
        $this->db->query("INSERT INTO cliente(idUsuario,nombre,apellido1,apellido2,correo,telefono,direccion) VALUES (idUsuario:,:nombre,:apellido1,:apellido2,:correo,:telefono,:direccion) ");
        //bindiamos
        $this->db->bind(':idUsuario', $data['idUsuario']);
        $this->db->bind(':nombre', $data['apellido1']);
        $this->db->bind(':apellido1', $data['apellido1']);
        $this->db->bind(':apellido2', $data['apellido2']);
        $this->db->bind(':correo', $data['correo']);
        $this->db->bind(':telefono', $data['telefono']);
        $this->db->bind(':direccion', $data['direccion']);
        //verificamos la ejecucion correcta del query
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function editarEstudiante($data)
    {
        $this->db->query('UPDATE cliente SET idUsuario=:idUsuario,
        nombre=:nombre,apellido1=:apellido1,
        apellido2=:apellido2,correo=:correo,telefono=:telefono,direccion=:direccion WHERE idUsuario=:idUsuario      
        ');
        //vinculacion de los datos
        $this->db->bind(':idUsuario', $data['idUsuario']);
        $this->db->bind(':nombre', $data['nombre']);
        $this->db->bind(':apellido1', $data['apellido1']);
        $this->db->bind(':apellido2', $data['apellido2']);
        $this->db->bind(':correo', $data['correo']);
        $this->db->bind(':telefono', $data['telefono']);
        $this->db->bind(':direccion', $data['direccion']);

        // ejecucion de la consulta

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function eliminarEstudiante($data)
    {
        $this->db->query('DELETE FROM cliente WHERE idUsuario = :idUsuario');
        //vinculacion de los datos
        $this->db->bind(':idUsuario', $data['idUsuario']);

        // ejecucion de la consulta

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}