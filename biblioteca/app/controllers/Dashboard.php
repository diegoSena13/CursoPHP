<?php

class Dashboard extends Controller{
    public function __construct()
    {
        $this->EstudianteModel = $this->loadModel('EstudianteModel');
    }

    public function carga()
    {
        $data=[];  //temporal porque no hay datos
        $this->renderView('dashboard/dashboard',$data);
    }
    public function cargarEstudiante()
    {
        //$data=[];
        $data=$this->EstudianteModel->listarEstudiantes();  //temporal porque no hay datos
        $this->renderView('estudiante/estudianteInicio',$data);
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
