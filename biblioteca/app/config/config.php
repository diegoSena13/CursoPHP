<?php
/*
configuracion general del framework
constantes
*/

//directorio raiz o padre del framework
define('APPROOT',dirname(dirname(__FILE__)));
//echo APPROOT;
//url de la app
define('URLROOT','http://localhost/Biblioteca/');
//nombre de la aplicacion
define('SITENAME','biblioteca-69');
//credenciales para la base de datos


//FIXME: 
define('DB_HOST','localhost'); //cambiarla en el deploy
define('DB_USER','root'); //usuario de la bd
define('DB_PASSWORD',''); //contraseña de la base de datos
define('DB_NAME','hospisoft'); //nombre de la bd

//echo URLROOT.DB_HOST;