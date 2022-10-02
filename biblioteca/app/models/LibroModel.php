<?php

//modelo correspondiente
class LibroModel
{
    private $db;
    public function __construct()
    {
        $this->db=new Dbase;
    }
    //  
    /**
     * listarLibro
     * función para traer todos los libros   
     * @return void
     */
    public function listarLibro(){
        $this->db->query("SELECT * FROM libro");
        $resultSet= $this->db->getAll();
        return $resultSet;
    }
    
    /**
     * fk
     * funcion para traer los nits y el nombre de las editoriales
     * @return void
     */
    public function fk(){
        $this->db->query("SELECT nit, nombre FROM editorial");
        $resultSet= $this->db->getAll();
        return $resultSet;
    }
    public function getTable()
    {
        $this->db->query("SELECT id,titulo,autor,descripcion,categoria,cantidad,existencia,editorial FROM `libro`");
        $resultSet = $this->db->getAll();
        return $resultSet;
    }
    //    
    /**
     * getOne
     * función para traer un libro 
     * @param  mixed $id
     * @return void
     */
    public function getOne($id)
    {
        $this->db->query("SELECT * FROM `libro` WHERE id=:id");
        $this->db->bind(':id', $id);
        $resultSet = $this->db->getOne();
        return $resultSet;
    }
    //     
    /**
     * InsertarLibro
     * función para insertar un libro
     * @param  mixed $data
     * @return void
     */
    public function InsertarLibro($id,$titulo,$autor,$descripcion,$categoria,$editorial,$fechaSalidad,$cantidad,$existencia,$editorial_nit){
        $this->db->query("insert into libro (id,titulo,autor,descripcion,categoria,editorial,fechaSalidadLibro,cantidad,existencia,editorial_nit) values (:id,:titulo,:autor,:descripcion,:categoria,:editorial,:fechaSalidadLibro,:cantidad,:existencia,:editorial_nit)");
        $this->db->bind(':id', $id);
        $this->db->bind(':titulo', $titulo);
        $this->db->bind(':autor', $autor);
        $this->db->bind(':descripcion', $descripcion);
        $this->db->bind(':categoria', $categoria);
        $this->db->bind(':editorial', $editorial);
        $this->db->bind(':fechaSalidadLibro', $fechaSalidad);
        $this->db->bind(':cantidad', $cantidad);
        $this->db->bind(':existencia', $existencia);
        $this->db->bind(':editorial_nit', $editorial_nit);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    //     
    /**
     * EditarLibro
     * función para editar un libro
     * @param  mixed $data
     * @return void
     */
    public function EditarLibro($data){
        $this->db->query('UPDATE libro SET id=:id, titulo=:titulo,
        autor=:autor,descripcion=:descripcion,
        categoria=:categoria,editorial=:editorial,fechaSalidadLibro=:fechaSalidadLibro,cantidad=:cantidad,existencia=:existencia,editorial_nit=:editorial_nit WHERE id=:id       
        ');
        //vinculacion de los datos
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':titulo', $data['titulo']);
        $this->db->bind(':autor', $data['autor']);
        $this->db->bind(':descripcion', $data['descripcion']);
        $this->db->bind(':categoria', $data['categoria']);
        $this->db->bind(':editorial', $data['editorial']);
        $this->db->bind(':fechaSalidadLibro', $data['fechaSalidadLibro']);
        $this->db->bind(':cantidad', $data['cantidad']);
        $this->db->bind(':existencia', $data['existencia']);
        $this->db->bind(':editorial_nit', $data['editorial_nit']);

        // ejecucion de la consulta

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    //     
    /**
     * Eliminarlibro
     * función para eliminar un libro
     * @param  mixed $data
     * @return void
     */
    public function Eliminarlibro($id){
        $this->db->query('DELETE FROM libro WHERE id = :id');
        //vinculacion de los datos
        $this->db->bind(':id', $id);

        // ejecucion de la consulta

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    
    /**
     * search
     * funcion para buscar libros por el nombre
     * @param  mixed $data
     * @return void
     */
    public function search($data)
    {
        $this->db->query("SELECT * FROM libro WHERE titulo LIKE CONCAT(:titulo,'%')");
        $titulo = $data['titulo'];
        $this->db->bind(':titulo', $titulo);
        $resultSet = $this->db->getAll();
        return $resultSet;
    }
    
    /**
     * totalLibros
     * funcion para contar el numero de libros por id
     * @return void
     */
    public function totalLibros()
    {
        $this->db->query("SELECT COUNT(id) as numevents FROM libro");
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
        $this->db->query("SELECT * from libro ORDER BY id ASC LIMIT :limit OFFSET :offset");
        $this->db->bind(":limit", $perPage);
        $this->db->bind(":offset", $offset);
        $resultSet = $this->db->getAll();
        return $resultSet;
    }
}