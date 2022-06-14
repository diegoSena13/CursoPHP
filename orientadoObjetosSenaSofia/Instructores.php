<?php

/**
 *clase base del proyecto:
 *@author diego
 *@version 1.0 junio de 2022
 *@copyright senaSofia s.a.s
 **/


require_once 'Persona.php';
class Instructores extends Persona
{


    /* public function __construct()
    {
    } */

    public function registrarInasistenciaAprendiz()
    {
        return "registra inasistencia";
    }

    public function calificarEvidenciasAprendiz()
    {
        return "calificar evidencias";
    }
}
