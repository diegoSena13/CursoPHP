<?php

class Dashboard extends Controller{
    public function __construct()
    {
        $this->UsuarioModel = $this->loadModel('UsuarioModel');
    }
    
    /**
     * index
     * funcion para cargar el inicio
     * @return void
     */
    public function index() 
    {
        $data=[];  //temporal porque no hay datos
        $this->renderView('dashboard/dashboard',$data);
    }
    // función para ingresar al aplicativo    
    /**
     * signOut
     * funcion para cerrar sesion y regresar a el login
     * @return void
     */
    public function signOut()
    {

        session_unset();
        
        $data = [];
        $this->renderView('Inicio', $data);
    }
}
