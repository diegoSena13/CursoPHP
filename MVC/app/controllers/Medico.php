<?php

class Medico extends Controller{
    public function __construct()
    {
        
    }

    public function index()
    {
        $data=[];  //temporal porque no hay datos
        $this->getView('Medico',$data);
    }

    public function generarFormula(){
        echo 'este es el metodo generar formula de medico';
    }

    public function otroMetodo(){
        echo 'este es otro metodo del controlador medico';
    }
}