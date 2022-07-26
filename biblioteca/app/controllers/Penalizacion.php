<?php

class Penalizacion extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $data = [];  //temporal porque no hay datos
        $this->renderView('Penalizacion/PenalizacionInicio', $data);
    }
    public function p()
    {
        $data = [];  //temporal porque no hay datos
        $this->renderView('prestamos', $data);
    }
}
