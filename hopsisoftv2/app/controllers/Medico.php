<?php

class Medico extends Controller{
    private $MedicoModel;
    public function __construct()
    {
        $this->MedicoModel = $this->loadModel('MedicoModel');
    }

    public function index()
    {
        $data=$this->MedicoModel->listarMedicos();  //temporal porque no hay datos
        $this->renderView('Medico',$data);
    }

    public function generarFormula(){
        echo 'este es el metodo generar formula de medico';
    }

    public function otroMetodo(){
        echo 'este es otro metodo del controlador medico';
    }
}