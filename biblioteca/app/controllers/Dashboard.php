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
    public function login()
    {
        //$data=[];
        $data=[
            'correo' => $_POST['correo'],
            'telefono' => $_POST['telefono']
        ];  //temporal porque no hay datos
        
        if ($this->UsuarioModel->getOne($data)) {
            // $_SESSION['nombre'] = $usuario->idUsuario;
            $data = [];
            $this->renderView('dashboard/dashboard', $data);
        } else {
            $this->renderView('Inicio');
        };
    }
}
