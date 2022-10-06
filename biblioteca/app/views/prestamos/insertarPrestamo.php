<?php require_once APPROOT . "/views/inc/header.php" ?>

<body>
    <!-- <div class="container-fluid">
  <div class="row"> -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <div class="col-12">
                <h1>Registro de Prestamos</h1>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="container-fluid">
                    <form action="" id="frmFormula">
                        <!-- encabezado -->
                        <div class="row">
                            <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">fecha</label>
                                <input type="date" class="form-control" name="fecha" id="fecha" placeholder="fecha">
                            </div>
                            <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">nombre</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="nombre">
                            </div>
                            <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">correo</label>
                                <input type="email" class="form-control" name="correo" id="correo" placeholder="correo">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">telefono</label>
                                <input type="text" class="form-control" name="telefono" id="telefono" placeholder="telefono">
                            </div>
                            <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">direccion</label>
                                <input type="text" class="form-control" name="direccion" id="direccion" placeholder="direccion">
                            </div>
                            <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">identificacion</label>
                                <input type="text" class="form-control" name="identificacion" id="identificacion" placeholder="identificacion">
                            </div>
                            <div class="col-4">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#usuario" class="btn btn-sm btn-outline-secondary" data-bs-target='#exampleModal2' data-bs-toggle='modal' id="btnIniciarModal"><i class="bi bi-person-plus"></i> Insertar Usuario</button>
                            </div>
                        </div>
                        <hr size="20" color="blue">
                        <!--cuerpo-->
                        <div class="row">
                            <table class="table" id="tblDetalleLibro">
                                <thead>
                                    <tr>
                                        <th scope="col">Libro</th>
                                        <th scope="col">Autor</th>
                                        <th scope="col">descripcion</th>
                                        <th scope="col">fecha de salida</th>
                                        <th scope="col">fecha de entrega</th>

                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                            <div class="col-3">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#libro" class="btn btn-sm btn-outline-secondary" data-bs-target='#exampleModal2' data-bs-toggle='modal' id="btnIniciarModal"><i class="bi bi-person-plus"></i> Insertar Libro</button>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col text-center">
                            <button type="submit" id="" class="btn btn-success">Registrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal usuario -->
        <div class="modal fade" id="usuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Lista de usuarios</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- tabla de uduarios-->
                        <table class="table" id="tblUsuario">
                            <thead>
                                <tr>
                                    <th scope="col">Accion</th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Correo</th>
                                    <th scope="col">Telefono</th>
                                    <th scope="col">Direccion</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal libro -->
        <div class="modal fade" id="libro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Lista de libros</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <table class="table" id="tblLibros">
                            <thead>
                                <tr>
                                    <th scope="col">Accion</th>
                                    <th scope="col">ID</th>
                                    <th scope="col">titulo</th>
                                    <th scope="col">Autor</th>
                                    <th scope="col">Descripcion</th>
                                    <th scope="col">editorial</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <script src="<?php echo URLROOT; ?>js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo URLROOT; ?>jQuery-3.6.0/jquery-3.6.0.min.js"></script>
    <script src="<?php echo URLROOT; ?>DataTables-1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo URLROOT; ?>js/sweetalert2.all.min.js"></script>
    <script src="<?php echo URLROOT; ?>js/prestamo.js"></script>

    <?php require_once APPROOT . "/views/inc/footer.php" ?>