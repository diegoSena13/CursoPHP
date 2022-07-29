<?php

class Dashboard extends Controller{
    public function __construct()
    {
        
    }

    public function index()
    {
        $data=[];  //temporal porque no hay datos
        $this->renderView('dashboard/dashboard',$data);
    }
    public function login()
    {
        //$data=[];
        $data=[];  //temporal porque no hay datos
        $this->renderView('estudiante/estudianteInicio',$data);
    }
}
