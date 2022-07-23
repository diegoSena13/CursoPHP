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
                <form action="" method="">
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="NIT" aria-label="nit">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Nombre" aria-label="nombre">
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Generos Produce" aria-label="GeneroProduce">
                        </div>
                        <div class="col">
                            <label for="formGroupExampleInput" class="form-label">Seleccione Tipo</label>
                            <select class="form-select" aria-label="tipo">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col">
                            <input type="email" class="form-control" placeholder="Ubicación" aria-label="ubicacion">
                        </div>
                    </div><br>
                    <input type="submit" class="btn btn-danger" value="Registrar">
            </div>

            </form>
        </div>
    </main>

    <?php require_once APPROOT . "/views/inc/footer.php" ?>