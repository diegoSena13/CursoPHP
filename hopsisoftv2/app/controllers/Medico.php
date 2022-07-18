<?php

class Medico extends Controller{
    private $MedicoModel;
    public function __construct()
    {
        //configuramos el modelo correspondiente a este modelo
        $this->MedicoModel = $this->loadModel('MedicoModel');
    }

    public function index()
    {
        $data=$this->MedicoModel->listar();
        //$data=[];  //temporal porque no hay datos
        $this->renderView('Medico/MedicoInicio',$data);
    }
    public function formAdd()
    {
        
        $data=[];  //temporal porque no hay datos
        $this->renderView('Medico/MedicoAgregar',$data);
    }

    public function add(){
        $data=[];
        echo "agregando medico";
    }

    public function delete(){
        echo "borrando medico";
    }

    public function search(){
        echo "buscando medico";
    }
}