<?php
session_start();  //activa las variables de sesion
session_destroy(); 
session_unset();
header('Location: index.php');