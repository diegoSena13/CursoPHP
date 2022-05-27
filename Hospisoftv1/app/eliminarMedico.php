<?php
require_once 'bd.php';

$id = $_GET['id'];
//echo $id;



$sql = "DELETE FROM medico where idMedico={$id}";
$sentencia = $pdo->prepare($sql); //prepara consulta
$sentencia->execute();
//$resultado = $sentencia->fetch(PDO::FETCH_OBJ); //devuelve la fila con el resultado de la consulta
/* echo'<pre>';
var_dump($resultado);
echo'</pre>'; */


header('Location:../medicos.php');
