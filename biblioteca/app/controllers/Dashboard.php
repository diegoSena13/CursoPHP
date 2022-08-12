<?php

class Dashboard extends Controller{
    public function __construct()
    {
        $this->UsuarioModel = $this->loadModel('UsuarioModel');
    }

    public function index() 
    {
        $data=[];  //temporal porque no hay datos
        $this->renderView('dashboard/dashboard',$data);
    }
    // función para ingresar al aplicativo
    public function signOut()
    {

        session_unset();
        
        $data = [];
        $this->renderView('Inicio', $data);
    }
}
