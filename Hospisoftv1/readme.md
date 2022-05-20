# HOSPISOFT V1 

el favicon se puede descargar cualquier icono en formato .ico


# avance mayo 14 2022
1. organizar el menu del panel con usuario activo.
2. implementar el sistemma de mensajes de la aplicacion. (variables de sesión)
3. registro e encriptacion del paciente.
4. login del paciente
5. proyeccion del directorio de la aplicacion
6. hisorias de usuario(terrirtorium)-->scrum


# validacion PHP

trim()//limpia espacios en blanco a el inicio y el final
filter_var() con los filtros


# algoritmos de encriptacion...
bcrypt

# tipos de errores
https://manuales.guebs.com/php/errorfunc.constants.html

notice=advertencia de posible error
warning=error no tan grave, no rompe la ejecucion del script
error: fatales, paran el script


# variables de sesion
debido a que el protocolo http es sin estado (stateless), no guarda laa variables entre diferentes programas es nescesario crear variables de sesion, estas se crean como un arreglo en el navegador, para poderlas usar mientras el uso del navegador este activo(sesion)

la sdefino es php con session_star()... $_SESSION['nombreVariable']
le puedo asignar valores

# archivo htaccess

me sirve para configurar el servidor web (apache) OJO existe otro servidor y es el NGINX (este core en linux) = se dicen que es mas rapido
