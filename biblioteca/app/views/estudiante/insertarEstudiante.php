<?php require_once APPROOT . "/views/inc/header.php" ?>

<body>
    <!-- <div class="container-fluid">
  <div class="row"> -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <div class="col-2">
                <h1>Registro de Estudiantes</h1>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="" method="POST">
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="# Identificación" aria-label="identificacion">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Nombre" aria-label="nombre">
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Primer Apellido" aria-label="1erApellido">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Segundo Apellido" aria-label="2doApellido">
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col">
                            <input type="email" class="form-control" placeholder="Correo" aria-label="correo">
                        </div>
                        <div class="col">
                            <input type="email" class="form-control" placeholder="Telefono" aria-label="telefono">
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="email" class="form-control" placeholder="Dirección" aria-label="direccion">
                        </div>
                    </div><br>
                    <input type="submit" class="btn btn-danger" value="Registrar">

            </div>

            </form>
        </div>
    </main>

    <?php require_once APPROOT . "/views/inc/footer.php" ?>