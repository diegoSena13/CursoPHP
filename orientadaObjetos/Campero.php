<?php

/**
 * clase que hereda vehiculos
 * @author warson
 * @copyright 2000 public
 * @version 1.0 junio 2022
 *  **/


require_once 'Vehiculo.php';
class Campero extends Vehiculo
{
    private int $capacidadCarga;

    public function __construct($numeroRuedas, $placa, $numeroPuertas, $tieneTraccion, $color, $capacidadCarga)
    {
        parent::__construct($numeroRuedas, $placa, $numeroPuertas, $tieneTraccion, $color);
        $this->capacidadCarga = $capacidadCarga;
    }

    public function mostrarCapacidadCarga()
    {
        return "la capacidad de carga es: " . $this->capacidadCarga;
    }
}

$willys = new Campero(4, "dgsj654", 4, true, "rojo", 500);
echo $willys->mostrarPlaca();
echo "<br>";
echo $willys->mostrarColores();
echo "<br>";
echo $willys->mostrarCapacidadCarga();
