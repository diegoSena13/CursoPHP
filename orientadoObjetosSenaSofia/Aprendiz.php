<?php

/**
 *clase base del proyecto:
 *@author diego
 *@version 1.0 junio de 2022
 *@copyright senaSofia s.a.s
 **/


require_once 'Persona.php';
class Aprendiz extends Persona
{
    private int $numeroFicha;

    public function __construct($identificacion, $nombre, $apellido, $contraseña, $correoElectronico, $numerotelefonico, $tipoIdentificacion, $numeroFicha)
    {
        parent::__construct($identificacion, $nombre, $apellido, $contraseña, $correoElectronico, $numerotelefonico, $tipoIdentificacion);
        $this->numeroFicha = $numeroFicha;
    }

    public function inscribirseFormacion()
    {
        return "se nscribe en formacion";
    }

    public function consultarCalificaciones()
    {
        return "consulta calificaciones";
    }
    public function subirEvidencias()
    {
        return "aqui sube evidencias";
    }
    public function cancelarInscripcionCurso()
    {
        return "cancelar inscripciones a curso";
    }
    public function registrarse()
    {
        return "registrarse en senasofia plus";
    }
}
