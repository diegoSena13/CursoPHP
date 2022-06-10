<?php

/**
 *clase base del proyecto:
 *@author diego
 *@version 1.0 junio de 2022
 *@copyright novaget s.a.s
 **/

class Vehiculo
{
    //atributos de la clase
    //tenga en cuenta la visibilidad de los atributos
    public int $numeroRuedas;
    private string $placa;
    protected int $numeroPuertas;
    private bool $tieneTraccion;   //el vehiculo tiene traccion en las 4 ruedas
    public static string $color;



    //metodos de la clase
    //metodo magico para crear la clase---metodo constructor --setter

    public function __construct($numeroRuedas, $placa, $numeroPuertas, $tieneTraccion, $color)
    {
        $this->numeroRuedas = $numeroRuedas;
        $this->placa = $placa;
        $this->numeroPuertas = $numeroPuertas;
        $this->tieneTraccion = $tieneTraccion;
        self::$color = $color;
    }

    //metodo getter de la clase
    //return string
    public function mostrarPlaca()
    {
        return "la placa de su vehiculo es: " . $this->placa;
    }


    //return bool
    public function mostrarEstadoTraccion()
    {
        if ($this->tieneTraccion) {
            return "SI TIENE TRACCION";
        } else {
            return "NOO TIENE TRACCION";
        }
    }

    public function mostrarColores()
    {
        return "el color del vehiculo: " . self::$color;
    }



    //estilo tradicional

    /* public function getNumeroRuedas()
    {
        return $this->numeroRuedas;
    }

    /**
     * Set the value of numeroRuedas
     *
     * @return  self
      
    public function setNumeroRuedas($numeroRuedas)
    {
        $this->numeroRuedas = $numeroRuedas;

        return $this;
    } */
}
//fin de la clase
/* $moto = new  Vehiculo(2, "vdk477", 0, true, "rojo");   //instanciar la clase

echo $moto->mostrarPlaca();
echo "<br>";
echo $moto->mostrarEstadoTraccion(); */
