<?php

require_once 'bd.php';

$idMedico = filter_var(trim($_POST['identificacion']), FILTER_DEFAULT);
$password = filter_var(trim($_POST['password']), FILTER_DEFAULT);

/* echo  '<pre>';
var_dump($usuario,$password);
echo  '</pre>'; */



$sql = 'select * from medico where idMedico=?';
$sentencia = $pdo->prepare($sql); //prepara consulta
$sentencia->execute([$idMedico]);  //ejecuta la sentencia sql
$medico = $sentencia->fetch(PDO::FETCH_OBJ);

/* echo  '<pre>';
var_dump($medico);
echo  '</pre>'; */

//VALIDAMOS USUARIO


//validacion basada en el email con validacion

if (!password_verify($password, $medico->passMedico)) {
    header('Location:../index.php');
} else {
    $_SESSION['idMedico'] = $medico->idMedico; //para almacenar las agendas del citio
    $_SESSION['usuarioActivo'] = $medico->nombreMedico;
    header('Location:../panelMedico.php');
}
