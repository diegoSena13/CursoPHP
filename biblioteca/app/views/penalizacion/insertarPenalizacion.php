<?php require_once APPROOT . "/views/inc/header.php" ?>

<body>
    <!-- <div class="container-fluid">
  <div class="row"> -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <div class="col-2">
                <h1>Registro de penalizaciones</h1>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="" method="">
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Nombre Estudiante" aria-label="nombreEstudiante"  >
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Estado" aria-label="fecha">
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col">
                        <input type="email" class="form-control" placeholder="Correo Estudiante" aria-label="correoEstudiante">
                        </div>
                        <div class="col">
                            <input type="email" class="form-control" placeholder="Tiempo de Penalización" aria-label="Tiempo de Penalizacion">
                        </div>
                    </div><br>
            </div>
            <br>
            <input type="submit" class="btn btn-danger" value="Registrar">
            </form>
        </div>
    </main>

    <?php require_once APPROOT . "/views/inc/footer.php" ?>