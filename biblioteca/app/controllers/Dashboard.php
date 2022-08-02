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
    public function login()
    {
        //$data=[];
        $data=[
            'email' => $_POST['email'],
            'password' => $_POST['password']
        ];  //temporal porque no hay datos
        
        if ($this->UsuarioModel->getOne($data)) {
            $data = [];
            $this->renderView('dashboard/dashboard', $data);
        } else {
            die('ocurrió un error en el ingreso !');
        };
    }
}
