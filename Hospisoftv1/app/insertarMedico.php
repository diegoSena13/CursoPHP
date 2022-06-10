<?php

require_once 'bd.php';  //incluyo la cadena de conexion php


//recibimos la data del formulario

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$especialidad = $_POST['especialidad'];
$password = $_POST["contraseña"];

$password = password_hash($password, PASSWORD_DEFAULT);


//hacer el proceso de request - response

$sql = 'INSERT INTO `medico` (`nombreMedico`, `apellidosMedico`, `email`, `especialidad`,`passMedico`) VALUES (?,?,?,?,?);';
$sentencia = $pdo->prepare($sql); //prepara consulta
$sentencia->execute([$nombre, $apellidos, $email, $especialidad, $password]);  //ejecuta la sentencia sql
//$resultado=$sentencia->fetchAll();  //almacena el resultado de la consulta en formarto array de php
/* echo '<pre>';
var_dump($resultado);
echo '<pre>'; */

header('Location:../medicos.php');
