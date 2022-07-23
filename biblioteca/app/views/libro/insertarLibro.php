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
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Titulo" aria-label="titulo">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Autor" aria-label="autor">
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Descripción" aria-label="descripcion">
                        </div>
                        <div class="col">
                            <label for="formGroupExampleInput" class="form-label">Seleccione Categoría</label>
                            <select class="form-select" aria-label="categoria">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col">
                            <label for="formGroupExampleInput" class="form-label">Seleccione el Editorial</label>
                            <select class="form-select" aria-label="editorial">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="formGroupExampleInput" class="form-label">Fecha de Lanzamiento</label>
                            <input type="date" name="fechaLanzamiento" id="fechaLanzamiento">
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col">
                            <input type="email" class="form-control" placeholder="Cantidad" aria-label="cantidad">
                        </div>
                        <div class="col">
                            <input type="email" class="form-control" placeholder="Existencia" aria-label="existencia">
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col">
                            <label for="formGroupExampleInput" class="form-label">Seleccione NIT del Editorial</label>
                            <select class="form-select" aria-label="NitEditorial">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div><br>

                    </div>
                    <br>
                    <input type="submit" class="btn btn-danger" value="Registrar">
                </form>
            </div>
    </main>

    <?php require_once APPROOT . "/views/inc/footer.php" ?>