<?php

/**
 *clase base del proyecto:
 *@author diego
 *@version 1.0 junio de 2022
 *@copyright senaSofia s.a.s
 **/


require_once 'Persona.php';
class CoordinadoresAcademicos extends Persona
{


    /* public function __construct()
    {
    } */

    public function organizarHorarios()
    {
        return "organiza horarios";
    }

    public function contratarInstructores()
    {
        return "contrata instructores";
    }
}

$diego = new CoordinadoresAcademicos(123, "diego", "ramirez", "wewe323", "diego@gmail.com", "2313232", "cedula");

echo $diego->organizarHorarios();
