<?php

class Inicio extends Controller{
    public function __construct()
    {
         // clase modelo
         $this->UsuarioModel = $this->loadModel('UsuarioModel');
    }    
    /**
     * index
     * funcion que cargar el login
     * @return void
     */
    public function index()
    {

        $data=[];  //temporal porque no hay datos
        $this->renderView('Inicio',$data);
    }    
    /**
     * openMenu
     * funcion de el inicio de sesion y creacion de variables de session
     * @return void
     */
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