<?php

class Inicio extends Controller{
    public function __construct()
    {
        
    }

    public function index()
    {
        /* session_start();
 
        if (($_SESSION['']))
        {
        $_SESSION[''] = 1;
        } */

        $data=[];  //temporal porque no hay datos
        $this->renderView('Inicio',$data);
    }
}