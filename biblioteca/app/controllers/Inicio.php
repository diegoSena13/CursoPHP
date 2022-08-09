<?php

class Inicio extends Controller{
    public function __construct()
    {
         // clase modelo
         $this->UsuarioModel = $this->loadModel('UsuarioModel');
    }
    public function index()
    {

        $data=[];  //temporal porque no hay datos
        $this->renderView('Inicio',$data);
    }
    public function openMenu(){
        $data=[
            'correo' => $_POST['correo'],
            'telefono' => $_POST['telefono'],
        ]
       /*  $data = $this->UsuarioModel->Login(); 
        
        if ($data == "vacio"){
            $this->renderView('inicio',$this->data);
        }else{
            session_start();
            $_SESSION["iniciar"] = $data;
            $_SESSION["rol"] = $data->rol;
            $_SESSION["idPrestador"];
            $this->renderView('dashboard/dashboard',$data);
        }*/
    }
}