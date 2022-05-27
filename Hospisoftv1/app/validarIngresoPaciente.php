<?php

require_once 'bd.php';

$usuario = filter_var(trim($_POST['usuario']), FILTER_DEFAULT);
$password = filter_var(trim($_POST['password']), FILTER_DEFAULT);

/* echo  '<pre>';
var_dump($usuario,$password);
echo  '</pre>'; */



$sql = 'select * from pacientes where userPaciente=?';
$sentencia = $pdo->prepare($sql); //prepara consulta
$sentencia->execute([$usuario]);  //ejecuta la sentencia sql
$paciente = $sentencia->fetch(PDO::FETCH_OBJ);

/* echo  '<pre>';
var_dump($paciente);
echo  '</pre>'; */

//VALIDAMOS USUARIO


//validacion basada en el email con validacion

if (!password_verify($password, $paciente->passwordPaciente)) {
    header('Location:../index.php');
} else {
    $_SESSION['idUsuario'] = $paciente->idPaciente; //para almacenar las agendas del citio
    $_SESSION['usuarioActivo'] = $paciente->userPaciente;
    header('Location:../panelPaciente.php');
}
