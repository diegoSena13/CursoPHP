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
        ];
        if ($datos=$this->UsuarioModel->Login($data)) {
            session_start();
            $_SESSION['nombre']=$datos->nombre;
            $data = [];
            $this->renderView('dashboard/dashboard', $data);
        } else {
            $this->renderView('Inicio');
        };
    }
}