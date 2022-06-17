<?php

class Inicio extends Controller{
    public function __construct()
    {
        
    }

    public function index()
    {
        $data=[];  //temporal porque no hay datos
        $this->getView('Inicio',$data);
    }
}