<?php require_once APPROOT . "/views/inc/header.php" ?>

<body>
    <!-- <div class="container-fluid">
  <div class="row"> -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <div class="col-2">
                <h1>Registro de Penalizaciones</h1>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="<?php echo URLROOT ?> Penalizacion/cargarPenalizacion" method="post">
                    <div class="row">
                        <div class="col">
                            <input type="text" name="idPenalizacion" class="form-control" placeholder="ID" aria-label="id">
                        </div>
                        <div class="col">
                            <input type="text" name="estado" class="form-control" placeholder="Estado" aria-label="estado">
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col">
                            <input type="text" name="nombreCliente" class="form-control" placeholder="Nombre Estudiante" aria-label="nombreCliente">
                        </div>
                        <div class="col">
                            <input type="text" name="correoCliente" class="form-control" placeholder="Correo Electronico" aria-label="correoCliente">
                        </div>
                    </div><br>
                    <input type="submit" class="btn btn-danger" value="Registrar">
            </div>

            </form>
        </div>
    </main>

    <?php require_once APPROOT . "/views/inc/footer.php" ?>