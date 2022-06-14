<?php

/**
 *clase base del proyecto:
 *@author diego
 *@version 1.0 junio de 2022
 *@copyright senaSofia s.a.s
 **/


require_once 'Persona.php';
class PersonalAdministrativo extends Persona
{


    /* public function __construct()
    {
    } */

    public function verInfromacion()
    {
        return "ver informacion";
    }

    public function cambiarInformacion()
    {
        return "edita informacion";
    }
    public function registrarPersonas()
    {
        return "registra personal de el sena";
    }
}
