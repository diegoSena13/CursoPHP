<?php

//modelo correspondiente
class EstudianteModel
{
    private $db;
    public function __construct()
    {
        $this->db=new Dbase;
    }   
    /**
     * listarEstudiantes
     * función para traer todos los estudiantes
     * @return void
     */
    public function listarEstudiantes(){
        $this->db->query("SELECT * FROM cliente");
        $resultSet= $this->db->getAll();
        return $resultSet;
    }  
    public function getTable()
    {
        $this->db->query("SELECT idUsuario,nombre,correo,telefono,direccion FROM `cliente`");
        $resultSet = $this->db->getAll();
        return $resultSet;
    }
    /**
     * getOne
     * función para traer un estudiante 
     * @param  mixed $id
     * @return void
     */
    public function getOne($id)
    {
        $this->db->query("SELECT * FROM cliente where idUsuario =:id");
        $this->db->bind(':id', $id);
        $resultSet = $this->db->getOne();
        return $resultSet;
    }  
    /**
     * insertarEstudiante
     * función para insertar un estudiante  
     * @param  mixed $data
     * @return void
     */
    public function insertarEstudiante($id,$nombre,$apellido1,$apellido2,$correo,$telefono,$direccion)
    {
        $this->db->query("INSERT INTO cliente(idUsuario,nombre,apellido1,apellido2,correo,telefono,direccion) VALUES (:idUsuario,:nombre,:apellido1,:apellido2,:correo,:telefono,:direccion) ");
        //bindiamos
        $this->db->bind(':idUsuario', $id);
        $this->db->bind(':nombre', $nombre);
        $this->db->bind(':apellido1', $apellido1);
        $this->db->bind(':apellido2', $apellido2);
        $this->db->bind(':correo', $correo);
        $this->db->bind(':telefono', $telefono);
        $this->db->bind(':direccion', $direccion);
        //verificamos la ejecucion correcta del query
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
      
    /**
     * editarEstudiante
     * función para editar un estudiante  
     * @param  mixed $data
     * @return void
     */
    public function editarEstudiante($id,$nombre,$apellido1,$apellido2,$correo,$telefono,$direccion)
    {
        $this->db->query('UPDATE cliente SET idUsuario=:idUsuario,
        nombre=:nombre,apellido1=:apellido1,
        apellido2=:apellido2,correo=:correo,telefono=:telefono,direccion=:direccion WHERE idUsuario=:idUsuario      
        ');
        //vinculacion de los datos
        $this->db->bind(':idUsuario', $id);
        $this->db->bind(':nombre', $nombre);
        $this->db->bind(':apellido1', $apellido1);
        $this->db->bind(':apellido2', $apellido2);
        $this->db->bind(':correo', $correo);
        $this->db->bind(':telefono', $telefono);
        $this->db->bind(':direccion', $direccion);

        // ejecucion de la consulta

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    /**
     * eliminarEstudiante
     * función para eliminar un estudiante  
     * @param  mixed $data
     * @return void
     */
    public function eliminarEstudiante($id)
    {
        $this->db->query('DELETE FROM cliente WHERE idUsuario = :idUsuario');
        //vinculacion de los datos
        $this->db->bind(':idUsuario', $id);

        // ejecucion de la consulta

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }    
    /**
     * search
     * busca todos los datos de un usuario de la tabla cliente por nombre
     * @param  mixed $data
     * @return void
     */
    public function search($data)
    {
        $this->db->query("SELECT * FROM cliente WHERE nombre LIKE CONCAT(:nombre,'%')");
        $nombre = $data['nombre'];
        $this->db->bind(':nombre', $nombre);
        $resultSet = $this->db->getAll();
        return $resultSet;
    }
    
    /**
     * totalEstudiantes
     * devuelve el conteo de idUsuario de la tabla cliente
     * @return void
     */
    public function totalEstudiantes()
    {
        $this->db->query("SELECT COUNT(idUsuario) as numevents FROM cliente");
        $resultSet = $this->db->getOne();
        return  $resultSet;
    }
    /**
     * totalPages
     * devuelve el total de paginas de acuerdo al limite y al offset
     * @param  mixed $perPage
     * @param  mixed $offset
     * @return void
     */
    public function totalPages($perPage, $offset)
    {
        $this->db->query("SELECT * from cliente ORDER BY idUsuario ASC LIMIT :limit OFFSET :offset");
        $this->db->bind(":limit", $perPage);
        $this->db->bind(":offset", $offset);
        $resultSet = $this->db->getAll();
        return $resultSet;
    }
}