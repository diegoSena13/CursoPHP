<?php require_once APPROOT . "/views/inc/header.php" ?>

<body>
    <!-- <div class="container-fluid">
  <div class="row"> -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <div class="col-2">
                <h5>Eliminar Estudiantes</h5>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
            <form action="<?php echo URLROOT; ?>Estudiante/eliminarEstudiante/<?php echo $data['idUsuario']; ?>" method="POST">
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" name="idUsuario" placeholder="# Identificación" value="<?php echo $data['idUsuario']; ?>" aria-label="identificacion">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="<?php echo $data['nombre']; ?>" aria-label="nombre">
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" name="apellido1" placeholder="Primer Apellido" value="<?php echo $data['apellido1']; ?>" aria-label="1erApellido">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="apellido2" placeholder="Segundo Apellido" value="<?php echo $data['apellido2']; ?>" aria-label="2doApellido">
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col">
                            <input type="email" class="form-control" name="correo" placeholder="Correo" value="<?php echo $data['correo']; ?>" aria-label="correo">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="telefono" placeholder="Telefono" value="<?php echo $data['telefono']; ?>" aria-label="telefono">
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="direccion" placeholder="Dirección" value="<?php echo $data['direccion']; ?>" aria-label="direccion">
                        </div>
                    </div><br>
                    <button type="reset" class="btn btn-secondary btn-sm ms-1">Cancelar</button>
                    <button type="submit" class="btn btn-success  btn-sm ms-1">Enviar</button>

            </div>

            </form>
        </div>
    </main>

    <?php require_once APPROOT . "/views/inc/footer.php" ?>