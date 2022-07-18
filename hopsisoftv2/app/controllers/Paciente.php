<?php

class Paciente extends Controller{
    private $MedicoModel;
    public function __construct()
    {
        //configuramos el modelo correspondiente a este modelo
        $this->pacienteModel = $this->loadModel('PacienteModel');
    }

    public function index()
    {
        $data=$this->pacienteModel->listar();
        //$data=[];  //temporal porque no hay datos
        $this->renderView('Paciente/PacienteInicio',$data);
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