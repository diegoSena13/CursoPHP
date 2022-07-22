<?php

class Editorial extends Controller{
    public function __construct()
    {
        $this->EditorialModel = $this->loadModel('EditorialModel');
    }

    public function index()
    {
        //$data=[];
        $data=$this->EditorialModel->listarEditorial();  //temporal porque no hay datos
        $this->renderView('editorial/editorialInicio',$data);
    }
    public function cargarEditorial()
    {
        $data=[];  //temporal porque no hay datos
        $this->renderView('dashboard/dashboard',$data);
    }
    public function cargarLibro()
    {
        $data=[];  //temporal porque no hay datos
        $this->renderView('dashboard/dashboard',$data);
    }
}