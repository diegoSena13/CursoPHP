<?php
$numeroDePersonas=$_POST['numeroDePersonas'];

if ($numeroDePersonas>200 && $numeroDePersonas<=300) {
    echo "El costo de plato por personas es: $11.000";
}
if ($numeroDePersonas>300) {
    echo "El costo de plato por personas es: $9.000";
}
if ($numeroDePersonas<=200) {
    echo "El costo de plato por personas es: $14.000";
}