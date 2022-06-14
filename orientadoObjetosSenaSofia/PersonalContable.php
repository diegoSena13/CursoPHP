<?php

/**
 *clase base del proyecto:
 *@author diego
 *@version 1.0 junio de 2022
 *@copyright senaSofia s.a.s
 **/


require_once 'Persona.php';
class PersonalContable extends Persona
{
    private int $nivel;

    public function __construct($identificacion, $nombre, $apellido, $contraseña, $correoElectronico, $numerotelefonico, $tipoIdentificacion, $nivel)
    {
        parent::__construct($identificacion, $nombre, $apellido, $contraseña, $correoElectronico, $numerotelefonico, $tipoIdentificacion);
        $this->nivel = $nivel;
    }

    public function verActivos()
    {
        return "ver activos";
    }

    public function verPasivos()
    {
        return "ver pasivos";
    }
    public function declararRenta()
    {
        return "declara renta";
    }
}
