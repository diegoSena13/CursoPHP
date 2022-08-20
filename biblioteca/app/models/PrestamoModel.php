<?php

//modelo correspondiente
class PrestamoModel
{
    private $db;
    public function __construct()
    {
        $this->db = new Dbase;
    }   
    /**
     * listarPrestamo
     * función para traer el emcabezado del prestamo 
     * @return void
     */
    public function listarPrestamo()
    {
        $this->db->query("SELECT * FROM `encabezadoprestamo` INNER JOIN `encabezadoprestamo` ON encabezadoprestamo.consecutivo =detalleprestamo .consecutivo;");
        $resultSet = $this->db->getAll();
        return $resultSet;
    }     
    /**
     * getOne
     * función para traer una penalización
     * @param  mixed $consecutivo
     * @return void
     */
    public function getOne($consecutivo)
    {
        $this->db->query("SELECT * FROM `encabezadoprestamo` WHERE consecutivo=:consecutivo");
        $this->db->bind(':consecutivo', $consecutivo);
        $resultSet = $this->db->getOne();
        return $resultSet;
    }     
    /**
     * InsertarPrestamo
     * función para insertar una penalización
     * @param  mixed $data
     * @return void
     */
    public function InsertarPrestamo($data)
    {
        $this->db->query("insert into encabezadoprestamo (consecutivo,fecha,nombreCliente,correoCliente,telefonoCliente,DireccionCliente,usuario_idUsuario) values (:idPenalizacion,:estado,:nombreCliente,:correoCliente)");
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
