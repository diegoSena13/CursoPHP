<?php

$id = $_GET['id'];
echo $id;


require_once 'crud/bd.php';
$sql = 'SELECT *FROM contacto where id=?';
$sentencia = $pdo->prepare($sql); //prepara consulta
$sentencia->execute([$id]);
$resultado = $sentencia->fetch(); //devuelve la fila con el resultado de la consulta
/* echo'<pre>';
var_dump($resultado);
echo'</pre>'; */
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <form action="" method="POST">
        <div class="mb-3">
            <label for="nombre" class="form-label"></label>
            <input type="text" class="form-control" value="<?php echo$resultado[0];?>" name="nombre" id="nombre">
        </div>
        <div class="mb-3">
            <label for="nombre" class="form-label"></label>
            <input type="text" class="form-control" value="<?php echo$resultado[1];?>" name="nombre" id="nombre">
        </div>
        <div class="mb-3">
            <label for="nombre" class="form-label"></label>
            <input type="text" class="form-control" value="<?php echo$resultado[2];?>" name="nombre" id="nombre">
        </div>
        <div class="mb-3">
            <label for="nombre" class="form-label"></label>
            <input type="text" class="form-control" value="<?php echo$resultado[3];?>" name="nombre" id="nombre">
        </div>
        <div class="mb-3">
            <label for="nombre" class="form-label"></label>
            <input type="text" class="form-control" value="<?php echo$resultado[4];?>" name="nombre" id="nombre">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>