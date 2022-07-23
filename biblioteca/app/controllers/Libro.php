<?php

class Libro extends Controller{
    public function __construct()
    {
        $this->LibroModel = $this->loadModel('LibroModel');
    }

    public function index()
    {
        //$data=[];
        $data=$this->LibroModel->listarLibro();  //temporal porque no hay datos
        $this->renderView('libro/libroInicio',$data);
    }
    public function addLibro()
    {
        $data=[];  //temporal porque no hay datos
        $this->renderView('libro/insertarLibro',$data);
    }
    public function cargarLibro()
    {
        $data=[];  //temporal porque no hay datos
        $this->renderView('dashboard/dashboard',$data);
    }
}