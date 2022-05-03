<?php

require_once 'bd.php';  //incluyo la cadena de conexion php


//recibimos la data del formulario

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];


//hacer el proceso de request - response

$sql="UPDATE contacto set nombre=?,apellidos=? where id={$id}";
$sentencia=$pdo->prepare($sql); //prepara consulta
$sentencia->execute([$nombre,$apellidos]);  //ejecuta la sentencia sql
//$resultado=$sentencia->fetchAll();  //almacena el resultado de la consulta en formarto array de php
/* echo '<pre>';
var_dump($resultado);
echo '<pre>'; */

header('Location:../index.php');