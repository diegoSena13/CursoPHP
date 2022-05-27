<?php
require_once 'plantillas/cabecera.php';
?>
<!-- inicio del contenido -->
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h5>Mantenimiento de medicos</h5>
    </div>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <div class="row">
        <div class="col-md-6 text-center text-white ">
            <div class="card bg-black">
                <div class="card-body">
                    <form method="POST" action="app/insertarMedico.php">
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
                            <label for="especialidad" class="form-label">Especialidad</label>
                            <input type="text" class="form-control" name="especialidad" id="especialidad">
                        </div>
                        <button type="submit" class="btn btn-primary">Ingresar</button>
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
                        <th scope="col">email</th>
                        <th scope="col">especialidad</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once 'app/listarMedicos.php';
                    foreach ($resultado as $datos) {
                    ?>
                        <tr>
                            <td> <?php echo $datos->idMedico; ?> </td>
                            <td> <?php echo $datos->nombreMedico; ?> </td>
                            <td> <?php echo $datos->apellidosMedico; ?> </td>
                            <td> <?php echo $datos->email; ?> </td>
                            <td> <?php echo $datos->especialidad; ?> </td>
                            <td><a type="button" class="btn btn-primary" href="frmEditar.php?id=<?php echo $datos->idMedico; ?>"><i class="bi bi-pencil-square"></i></a></td>
                            <td><a type="button" class="btn btn-danger" href="app/eliminarMedico.php?id=<?php echo $datos->idMedico; ?>"><i class="bi bi-trash"></i></a></td>
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