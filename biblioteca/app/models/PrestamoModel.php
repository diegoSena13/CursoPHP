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
    public function add($data)
    {
        $this->db->query("INSERT INTO `encabezadoprestamo`(`fecha`, `nombreCliente`, `correoCliente`, `telefonoCliente`, `direccionCliente`,`usuario_idUsuario`) VALUES (:fecha,:nombre,:correo,:telefono,:direccion,:identificacion);");
        //bindiamos
        $this->db->bind(':fecha', $data['fecha']);
        $this->db->bind(':nombre', $data['nombre']);
        $this->db->bind(':correo', $data['correo']);
        $this->db->bind(':telefono', $data['telefono']);
        $this->db->bind(':direccion', $data['direccion']);
        $this->db->bind(':identificacion', $data['identificacion']);
        //verificamos la ejecucion correcta del query 
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function getLast()
    {
        $ultimo = $this->db->lastInsertId();
        return $ultimo;
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
