<?php
/* error_reporting(E_ALL); */
require_once 'bd.php';  //incluyo la cadena de conexion php


//recibimos la data del formulario

$nombre=filter_var(trim($_POST['nombre']) ,FILTER_DEFAULT);
$apellidos=filter_var(trim($_POST['apellidos']) ,FILTER_DEFAULT);
$email=filter_var(trim($_POST['email']) ,FILTER_VALIDATE_EMAIL);
$telefono=filter_var(trim($_POST['telefono']),FILTER_DEFAULT);
$movil=filter_var(trim($_POST['movil']),FILTER_DEFAULT);
$fechaNaci=filter_var(trim($_POST['fechaNaci']),FILTER_DEFAULT);
$epsPaciente=filter_var(trim($_POST['epsPaciente']),FILTER_DEFAULT);
$usuario=filter_var(trim($_POST['usuario']),FILTER_DEFAULT);
$password=filter_var(trim($_POST['password']),FILTER_DEFAULT);

//encriptar de la password

$password=password_hash($password,PASSWORD_DEFAULT);


//hacer el proceso de request - response

$sql='INSERT INTO pacientes (nombrePaciente, apellidoPaciente, emailPaciente, telPaciente,movilPaciente,fechaNaci,epsPaciente,userPaciente,passwordPaciente) VALUES (?,?,?,?,?,?,?,?,?);';
$sentencia=$pdo->prepare($sql); //prepara consulta
$sentencia->execute([$nombre,$apellidos,$email,$telefono,$movil,$fechaNaci,$epsPaciente,$usuario,$password]);  //ejecuta la sentencia sql
/* $resultado=$sentencia->fetchAll();  //almacena el resultado de la consulta en formarto array de php
echo '<pre>';
echo var_dump($sentencia->rowCount());
echo '<pre>'; */

if($sentencia->rowCount()>=1){
    $_SESSION['tipo']="primary";
    $_SESSION['mensaje']="operacion exitosa";


}else{
    $_SESSION['tipo']="danger";
    $_SESSION['mensaje']="ha ocurrido un error en la insercion";

}
header('Location:../frmRegistroPaciente.php');