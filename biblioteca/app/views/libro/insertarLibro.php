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
                <form action="<?php echo URLROOT ?> Libro/cargarLibro" method="post">
                    <div class="row">
                        <div class="col">
                            <input type="text" name="id" class="form-control" placeholder="ID" aria-label="id">
                        </div>
                        <div class="col">
                            <input type="text" name="titulo" class="form-control" placeholder="Titulo" aria-label="titulo">
                        </div>

                    </div><br>
                    <div class="row">
                        <div class="col">
                            <input type="text" name="autor" class="form-control" placeholder="Autor" aria-label="autor">
                        </div>
                        <div class="col">
                            <input type="text" name="descripcion" class="form-control" placeholder="Descripción" aria-label="descripcion">
                        </div>

                    </div><br>
                    <div class="row">
                        <div class="col">
                            <label for="formGroupExampleInput" class="form-label">Seleccione Categoría</label>
                            <select name="categoria" class="form-select" aria-label="categoria">
                                <option value="">Científicos</option>
                                <option value="">Literatura y lingüísticos</option>
                                <option value="">De viaje</option>
                                <option value="">Biografías</option>
                                <option value="">Libro de texto</option>
                                <option value="">Libros de gran formato (coffee table book)</option>
                                <option value="">De referencia o consulta</option>
                                <option value="">Monografías</option>
                                <option value="">Recreativos</option>
                                <option value="">Poéticos</option>
                                <option value="">Juveniles</option>
                                <option value="">Ficción</option>
                                <option value="">Comedia</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="formGroupExampleInput" class="form-label">Seleccione el Editorial</label>
                            <select name="editorial" class="form-select" aria-label="editorial">
                                <?php foreach ($data as $editorial) :; ?>
                                    <option value=""><?php echo $editorial->nombre; ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>

                    </div><br>
                    <div class="row">
                        <div class="col">
                            <label for="formGroupExampleInput" class="form-label">Fecha de Lanzamiento</label>
                            <input type="date" name="fechaSalidadLibro" id="fechaSalidadLibro">
                        </div>
                        <div class="col">
                            <input type="text" name="cantidad" class="form-control" placeholder="Cantidad" aria-label="cantidad">
                        </div>

                    </div><br>
                    <div class="row">
                        <div class="col">
                            <input type="text" name="existencia" class="form-control" placeholder="Existencia" aria-label="existencia">
                        </div>
                        <div class="col">
                            <label for="formGroupExampleInput" class="form-label">Seleccione NIT del Editorial</label>
                            <select name="editorial_nit" class="form-select" aria-label="NitEditorial">
                                <?php foreach ($data as $editorial) :; ?>
                                    <option value="<?php echo $editorial->nit; ?>"><?php echo $editorial->nit; ?></option>
                                <?php endforeach ?>
                            </select>
                        </div><br>

                    </div>
                    <br>
                    <input type="submit" class="btn btn-danger" value="Registrar">
                </form>
            </div>
    </main>

<?php require_once APPROOT . "/views/inc/footer.php"?>