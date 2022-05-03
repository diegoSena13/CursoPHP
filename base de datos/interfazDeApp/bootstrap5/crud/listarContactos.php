<?php

require_once 'bd.php';  //incluyo la cadena de conexion php


//hacer el proceso de request - response

$sql='SELECT * FROM `contacto`';
$sentencia=$pdo->prepare($sql); //prepara consulta
$sentencia->execute();  //ejecuta la sentencia sql
$resultado=$sentencia->fetchAll(PDO::FETCH_OBJ);  //almacena el resultado de la consulta en formarto objeto de php
/* echo '<pre>';
var_dump($resultado);
echo '<pre>'; */