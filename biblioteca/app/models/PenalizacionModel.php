<?php

//modelo correspondiente
class PenalizacionModel
{
    private $db;
    public function __construct()
    {
        $this->db = new Dbase;
    }
    public function listarPenalizacion()
    {
        $this->db->query("SELECT * FROM `penalizacion`");
        $resultSet = $this->db->getAll();
        return $resultSet;
    }
    public function getOne($idPenalizacion)
    {
        $this->db->query("SELECT * FROM `penalizacion` WHERE idPenalizacion=:idPenalizacion");
        $this->db->bind(':idPenalizacion', $idPenalizacion);
        $resultSet = $this->db->getOne();
        return $resultSet;
    }
    public function InsertarEditorial($data)
    {
        $this->db->query("insert into penalizacion (idPenalizacion,estado,nombreCliente,correoCliente) values (:idPenalizacion,:estado,:nombreCliente,:correoCliente)");
        $this->db->bind(':idPenalizacion', $data['idPenalizacion']);
        $this->db->bind(':estado', $data['estado']);
        $this->db->bind(':nombreCliente', $data['nombreCliente']);
        $this->db->bind(':correoCliente', $data['correoCliente']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function EditarPenalizacion($data)
    {
        $this->db->query('UPDATE penalizacion SET idPenalizacion=:idPenalizacion,
        estado=:estado,nombreCliente=:nombreCliente,
        correoCliente=:correoCliente WHERE idPenalizacion=:idPenalizacion       
        ');
        //vinculacion de los datos
        $this->db->bind(':idPenalizacion', $data['idPenalizacion']);
        $this->db->bind(':estado', $data['estado']);
        $this->db->bind(':nombreCliente', $data['nombreCliente']);
        $this->db->bind(':correoCliente', $data['correoCliente']);

        // ejecucion de la consulta

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function EliminarPenalizacion($data)
    {
        $this->db->query('DELETE FROM penalizacion WHERE idPenalizacion = :idPenalizacion');
        //vinculacion de los datos
        $this->db->bind(':idPenalizacion', $data['idPenalizacion']);

        // ejecucion de la consulta

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
