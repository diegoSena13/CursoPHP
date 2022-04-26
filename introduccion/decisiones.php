<?php
//bandera
$edad=18;


//decision simple
/*if($edad<20){
    echo"eres menor de veinte";
};*/


//decision compuesta

/* if($edad<20){
    echo"eres menor de veinte";
}else{
    echo "eres mayor de veinte";
}; */


//desicion switch
$opcion=3;

switch($opcion){
    case '1':
        echo "ordenaste pizza";
        break;
    case '2':
        echo "ordenaste perro caliente";
        break;
    case '3':
        echo "ordenaste hamburguesa";
        break;
    case '4':
        echo "ordenaste desgranado";
        break;
    case '5':
        echo "ordenaste ensalada";
        break;
    default:
        echo "debe elegir una opcion valida del menu";
        break;
}

