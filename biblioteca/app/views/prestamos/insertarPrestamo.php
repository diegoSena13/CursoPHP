<?php require_once APPROOT . "/views/inc/header.php" ?>

<body>
    <!-- <div class="container-fluid">
  <div class="row"> -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <div class="col-2">
                <h1>Registro de Libros</h1>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="" method="">
                    <!-- inicio cabecera-->
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Consecutivo" aria-label="titulo">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Fecha" aria-label="fecha">
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Nombre Estudiante" aria-label="nombreEstudiante">
                        </div>
                        <div class="col">
                            <input type="email" class="form-control" placeholder="Correo Estudiante" aria-label="correoEstudiante">
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Telefono Estudiante" aria-label="telefonoEstudiante">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Dirección Estudiante" aria-label="descripcion">
                        </div>
                    </div><br>
                    <!-- fin cabecera -->

                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Titulo libro" aria-label="tituloLibro">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Autor libro" aria-label="autorLibro">
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="formGroupExampleInput" class="form-label">Categoria</label>
                                <select class="form-select" aria-label="categoria">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="formGroupExampleInput" class="form-label">Fecha de Salidad</label>
                                <input type="date" name="fechaSalidad" id="fechaSalidad">
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col">
                                <label for="formGroupExampleInput" class="form-label">Fecha de Entrega</label>
                                <input type="date" name="fechaEntrega" id="fechaEntrega">
                            </div><br>
                        </div>
                        <br>
            </div>
            <br>
            <input type="submit" class="btn btn-danger" value="Registrar">
            </form>
        </div>
    </main>

    <?php require_once APPROOT . "/views/inc/footer.php" ?>