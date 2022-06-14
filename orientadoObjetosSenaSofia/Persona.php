<?php

/**
 *clase base del proyecto:
 *@author diego
 *@version 1.0 junio de 2022
 *@copyright senaSofia s.a.s
 **/

class Persona
{
    //atributos de la clase
    //tenga en cuenta la visibilidad de los atributos
    private int $identificacion;
    private string $nombre;
    private string $apellido;
    protected string $contraseña;   //el vehiculo tiene traccion en las 4 ruedas
    private string $correoElectronico;
    private string $numerotelefonico;
    private string $tipoIdentificacion;



    //metodos de la clase
    //metodo magico para crear la clase---metodo constructor --setter

    public function __construct($identificacion, $nombre, $apellido, $contraseña, $correoElectronico, $numerotelefonico, $tipoIdentificacion)
    {
        $this->identificacion = $identificacion;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->contraseña = $contraseña;
        $this->$correoElectronico = $correoElectronico;
        $this->$numerotelefonico = $numerotelefonico;
        $this->$tipoIdentificacion = $tipoIdentificacion;
    }

    //metodo getter de la clase
    //return string
    public function iniciarSesion()
    {
        return "aqui muestra el inicio de sesion";
    }
}
