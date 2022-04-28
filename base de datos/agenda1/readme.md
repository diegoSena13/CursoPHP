# PROYECTO AGENDA

La base datos se llama: agenda
yla tabla: contactos

CONTACTO
id autoincrementable int
nombre varchar(200)
apellidos varchar(250)
email varchar(200)
telefono varchar(100)
movil varchar(100)
activo booleano

OJO: el boolean se transfroma en tinyint(1) integer de una sola posicion donde 1=true y 0=false


## conexion a la base de datos

php tiene varias clases predeterminadas para manejar conexiones con bases de datos
Clase 1: mysqli() //base de datos mysql
Clase 2: PDO() universal PHP DATA



## REQUIRE, INCLUDE, REQUIRE_ONCE, INCLUDE_ONCE

todos incluyen un archivo externo, la diferencia esta en el manejo de errores
si hay un error grave include rompe o aborta la carfga del programa
el requiere genera el error pero permite la craga del aplicativo


## PATRON DE DISEÑO FRONT_CONTROLLER

en el diseño del aplicativo tengo una sola "puerta de entrada" a las funcionalidades
