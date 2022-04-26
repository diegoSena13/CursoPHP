<?php


$altura=$_POST['altura'];
$ancho=$_POST['ancho'];
$largo=$_POST['largo'];
$estrato=$_POST['estrato'];

$respuesta=0;

$area=$ancho*$largo;
$volumen=$area*$altura;



switch($estrato){
    case '1':
        $respuesta=$volumen*5000;
        echo "el total a pagar ".$respuesta;
        break;
    case '2':
        $respuesta=$volumen*6500;
        echo "el total a pagar ".$respuesta;
        break;
    case '3':
        $respuesta=$volumen*7000;
        echo "el total a pagar ".$respuesta;
        break;
    case '4':
        $respuesta=$volumen*8000;
        echo "el total a pagar ".$respuesta;
        break;
    case '5':
        $respuesta=$volumen*9200;
        echo "el total a pagar ".$respuesta;
        break;
    default:
        echo "debe elegir una opcion valida de estrato";
        break;
}