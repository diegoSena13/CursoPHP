<?php
require_once 'plantillas/cabecera.php';
?>
<!-- inicio del contenido -->
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Crud de contactos</h1>
    </div>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <div class="row">
    </div>
    <div class="row">
        <h2>Registro de contactos</h2>
        <div class="col-md-6 text-center text-white ">
            <div class="card bg-black">
                <div class="card-body">
                    <form method="POST" action="./crud/insertarContacto.php">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">nombre</label>
                            <input type="text" class="form-control" name="nombre" id="nombre">
                        </div>
                        <div class="mb-3">
                            <label for="apellidos" class="form-label">apellidos</label>
                            <input type="text" class="form-control" name="apellidos" id="apellidos">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">email</label>
                            <input type="email" class="form-control" name="email" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="telefono" class="form-label">telefono</label>
                            <input type="text" class="form-control" name="telefono" id="telefono">
                        </div>
                        <div class="mb-3">
                            <label for="movil" class="form-label">movil</label>
                            <input type="text" class="form-control" name="movil" id="movil">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" name="activo" id="activo">
                            <label class="form-check-label" for="exampleCheck1">Activo</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Movil</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once 'crud/listarContactos.php';
                    foreach ($resultado as $datos) {
                    ?>
                        <tr>
                            <td> <?php echo $datos->id; ?> </td>
                            <td> <?php echo $datos->nombre; ?> </td>
                            <td> <?php echo $datos->apellidos; ?> </td>
                            <td> <?php echo $datos->movil; ?> </td>
                            <td><a type="button" class="btn btn-primary" href="frmEditar.php?id=<?php echo $datos->id; ?>"><i class="bi bi-pencil-square"></i></a></td>
                            <td><a type="button" class="btn btn-danger" href="crud/eliminarContacto.php?id=<?php echo $datos->id; ?>"><i class="bi bi-trash"></i></a></td>
                        </tr>
                    <?php
                    };
                    ?>

                </tbody>
            </table>








        </div>
    </div>
</main>


<?php
require_once 'plantillas/footer.php';
?>