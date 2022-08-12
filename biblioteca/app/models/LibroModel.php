<?php

//modelo correspondiente
class LibroModel
{
    private $db;
    public function __construct()
    {
        $this->db=new Dbase;
    }
    // función para traer todos los libros
    public function listarLibro(){
        $this->db->query("SELECT * FROM libro");
        $resultSet= $this->db->getAll();
        return $resultSet;
    }
    // función para traer un libro
    public function getOne($id)
    {
        $this->db->query("SELECT * FROM `libro` WHERE id=:id");
        $this->db->bind(':id', $id);
        $resultSet = $this->db->getOne();
        return $resultSet;
    }
    // función para insertar un libro
    public function InsertarLibro($data){
        $this->db->query("insert into libro (id,titulo,autor,descripcion,categoria,editorial,fechaSalidadLibro,cantidad,existencia,editorial_nit) values (:id,:titulo,:autor,:descripcion,:categoria,:editorial,:fechaSalidadLibro,:cantidad,:existencia,:editorial_nit)");
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

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    // función para editar un libro
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
    // función para eliminar un libro
    public function Eliminarlibro($data){
        $this->db->query('DELETE FROM libro WHERE id = :id');
        //vinculacion de los datos
        $this->db->bind(':id', $data['id']);

        // ejecucion de la consulta

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function search($data)
    {
        $this->db->query("SELECT * FROM libro WHERE titulo LIKE CONCAT(:titulo,'%')");
        $titulo = $data['titulo'];
        $this->db->bind(':titulo', $titulo);
        $resultSet = $this->db->getAll();
        return $resultSet;
    }
}