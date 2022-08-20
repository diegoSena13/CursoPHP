<?php

//modelo correspondiente
class PenalizacionModel
{
    private $db;
    public function __construct()
    {
        $this->db = new Dbase;
    }    
    /**
     * listarPenalizacion
     * función para traer todas las penalizaciones
     * @return void
     */
    public function listarPenalizacion()
    {
        $this->db->query("SELECT * FROM `penalizacion`");
        $resultSet = $this->db->getAll();
        return $resultSet;
    }    
    /**
     * getOne
     * función para traer una penalización 
     * @param  mixed $idPenalizacion
     * @return void
     */
    public function getOne($idPenalizacion)
    {
        $this->db->query("SELECT * FROM `penalizacion` WHERE idPenalizacion=:idPenalizacion");
        $this->db->bind(':idPenalizacion', $idPenalizacion);
        $resultSet = $this->db->getOne();
        return $resultSet;
    }  
    /**
     * InsertarPenalizacion
     * función para insertar una penalización  
     * @param  mixed $data
     * @return void
     */
    public function InsertarPenalizacion($data)
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
    /**
     * EditarPenalizacion
     * función para editar una penalización
     * @param  mixed $data
     * @return void
     */
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
    /**
     * EliminarPenalizacion
     * función para eliminar una penalización
     * @param  mixed $data
     * @return void
     */
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
