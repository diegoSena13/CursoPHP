<?php

//por defecto

$frutas=["papaya",0,true,"mango",1.2];

var_dump($frutas);
echo '<hr>';
print_r($frutas);

//asociativo

$equipos=[

"n1"=>"deportivo cali",
"n2"=>89,
"t4"=>8.67,
"estado"=>true

];

echo'<br>';
echo'<pre>';
var_dump($equipos);
echo'</pre>';


//posicion especifica


echo '<br>';
echo $equipos["t4"];
echo '<br>';
echo $frutas[3]." - ".$equipos["t4"];
echo '<br>';


//recorre el array

foreach($equipos as $equipos){
    echo$equipos.'<br>';
}