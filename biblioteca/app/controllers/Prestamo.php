<?php

class Prestamo extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $data = [];  //temporal porque no hay datos
        $this->renderView('prestamos/insertarPrestamo', $data);
    }
    public function p()
    {
        $data = [];  //temporal porque no hay datos
        $this->renderView('prestamos', $data);
    }
}
