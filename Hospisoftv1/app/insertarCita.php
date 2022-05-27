<?php
/* error_reporting(E_ALL); */
require_once 'bd.php';  //incluyo la cadena de conexion php
error_reporting(E_ALL); //muestra todos los errores


//recibimos la data del formulario y validamnos

$fecha = filter_var($_POST['fecha'], FILTER_DEFAULT);
$hora = filter_var($_POST['hora'], FILTER_DEFAULT);
$idMedico = filter_var($_POST['idMedico'], FILTER_DEFAULT);
$motivo = filter_var(trim($_POST['motivo']), FILTER_DEFAULT);
$idPaciente = filter_var($_POST['idPaciente'], FILTER_DEFAULT);



//hacer el proceso de request - response

$sql = 'INSERT INTO agenda (fecha, hora, idMedico, motivo,idPaciente) VALUES (?,?,?,?,?);';
$sentencia = $pdo->prepare($sql); //prepara consulta
$sentencia->execute([$fecha, $hora, $idMedico, $motivo, $idPaciente]);  //ejecuta la sentencia sql
/* $resultado=$sentencia->fetchAll();  //almacena el resultado de la consulta en formarto array de php
echo '<pre>';
echo var_dump($sentencia->rowCount());
echo '<pre>'; */



if ($sentencia->rowCount() >= 1) {
    $_SESSION['tipo'] = "primary";
    $_SESSION['mensaje'] = "operacion exitosa";
} else {
    $_SESSION['tipo'] = "danger";
    $_SESSION['mensaje'] = "mo es posible registrar la cita, agenda ocupada";
}
header('Location:../frmAgendarMedico.php');
