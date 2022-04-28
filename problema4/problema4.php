<?php

$numeroEstudiantes=$_POST['numeroEstudiantes'];
$precio;


if ($numeroEstudiantes>=100) {
    $precio=6500;
}
if ($numeroEstudiantes>=50&&$numeroEstudiantes<=99) {
    $precio=7000;
}
if ($numeroEstudiantes>=30&&$numeroEstudiantes<=49) {
    $precio=9500;
}
if ($numeroEstudiantes<30) {
    $precio=400000/$numeroEstudiantes;
}

echo "el precio del alquiler del autobus por cada alumno es de: ".$precio;