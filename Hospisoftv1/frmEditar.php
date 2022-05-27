<?php

$id = $_GET['id'];
//echo $id;


require_once 'app/bd.php';
$sql = 'SELECT *FROM medico where idMedico=?';
$sentencia = $pdo->prepare($sql); //prepara consulta
$sentencia->execute([$id]);
$resultado = $sentencia->fetch(PDO::FETCH_OBJ); //devuelve la fila con el resultado de la consulta
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

    <title>Editar contacto</title>
</head>

<body>
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Editar</h5>
                <form action="app/actualizarMedico.php" method="POST">
                    <div class="mb-3">
                        <label for="id" class="form-label">id</label>
                        <input type="text" class="form-control" value="<?php echo $resultado->idMedico; ?>" readonly name="id" id="id">
                    </div>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">nombre</label>
                        <input type="text" class="form-control" value="<?php echo $resultado->nombreMedico; ?>" name="nombre" id="nombre">
                    </div>
                    <div class="mb-3">
                        <label for="apellido" class="form-label">apellido</label>
                        <input type="text" class="form-control" value="<?php echo $resultado->apellidosMedico; ?>" name="apellidos" id="apellidos">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">email</label>
                        <input type="email" class="form-control" value="<?php echo $resultado->email; ?>" name="email" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="especialidad" class="form-label">especialidad</label>
                        <input type="text" class="form-control" value="<?php echo $resultado->especialidad; ?>" name="especialidad" id="especialidad">
                    </div>
                    <button type="submit" class="btn btn-primary">Editar</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-6"></div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>