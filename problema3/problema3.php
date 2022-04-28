<?php
$tipoDeUva=$_POST['tipoDeUva'];
$tamañoDeUva=$_POST['tamañoDeUva'];
$precio=2000;


if ($tipoDeUva!="a"&&$tipoDeUva!="b"&&$tamañoDeUva!=1&&$tamañoDeUva!=2) {
    echo "elija un tipo de uva y tamaño correcto";
}
else{

    if ($tipoDeUva=="a"&&$tamañoDeUva==1) {
        $precio=$precio+2000;
        
    }
    if ($tipoDeUva=="a"&&$tamañoDeUva==2) {
        $precio=$precio+1000;
        
    }
    if ($tipoDeUva=="b"&&$tamañoDeUva==1) {
        $precio=$precio-500;
        
    }
    if ($tipoDeUva=="b"&&$tamañoDeUva==2) {
        $precio=$precio-900;
        
    }
}

echo"valor total del embarque: ".$precio;