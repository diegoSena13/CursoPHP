<?php require_once APPROOT . "/views/inc/header.php" ?>

<body>
    <!-- <div class="container-fluid">
  <div class="row"> -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <div class="col-2">
                <h1>Registro de Editoriales</h1>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="<?php echo URLROOT ?> Editorial/cargarEditorial" method="post">
                    <div class="row">
                        <div class="col">
                            <input type="text" name="nit" class="form-control" placeholder="NIT" aria-label="nit">
                        </div>
                        <div class="col">
                            <input type="text" name="nombre" class="form-control" placeholder="Nombre" aria-label="nombre">
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col">
                            <input type="text" name="generosProduce" class="form-control" placeholder="Generos Produce" aria-label="GeneroProduce">
                        </div>
                        <div class="col">
                            <label for="formGroupExampleInput" class="form-label">Seleccione Tipo</label>
                            <select class="form-select" name="tipo" aria-label="tipo">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col">
                            <input type="text" name="ubicacion" class="form-control" placeholder="Ubicación" aria-label="ubicacion">
                        </div>
                    </div><br>
                    <input type="submit" class="btn btn-danger" value="Registrar" id="Registrar">
            </div>

            </form>
        </div>
    </main>


    <script src="<?php echo URLROOT; ?>css/sweetalert2.min.css"></script>
    <script src="<?php echo URLROOT; ?>js/sweetalert2.all.min.js"></script>
    <script src="<?php echo URLROOT; ?>js/editorial.js"></script>

    <?php require_once APPROOT . "/views/inc/footer.php" ?>