<?php require_once APPROOT . "/views/inc/header.php" ?>

<body>
    <!-- <div class="container-fluid">
  <div class="row"> -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <div class="col-2">
                <h5>Eliminar Libro</h5>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="<?php echo URLROOT; ?>Libro/eliminarLibro/<?php echo $data['id']; ?>" method="post">
                    <div class="row">
                    <div class="col">
                            <input type="text" name="id" value="<?php echo $data['id']; ?>" class="form-control" placeholder="ID" aria-label="id">
                        </div>
                        <div class="col">
                            <input type="text" name="titulo" value="<?php echo $data['titulo']; ?>" class="form-control" placeholder="Titulo" aria-label="titulo">
                        </div>
                        
                    </div><br>
                    <div class="row">
                    <div class="col">
                            <input type="text" name="autor" value="<?php echo $data['autor']; ?>" class="form-control" placeholder="Autor" aria-label="autor">
                        </div>
                        <div class="col">
                            <input type="text"name="descripcion" value="<?php echo $data['descripcion']; ?>" class="form-control" placeholder="Descripción" aria-label="descripcion">
                        </div>
                        
                    </div><br>
                    <div class="row">
                    <div class="col">
                            <label for="formGroupExampleInput" class="form-label">Seleccione Categoría</label>
                            <select name="categoria" value="<?php echo $data['categoria']; ?>" class="form-select" aria-label="categoria">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="formGroupExampleInput" class="form-label">Seleccione el Editorial</label>
                            <select name="editorial" value="<?php echo $data['editorial']; ?>" class="form-select" aria-label="editorial">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        
                    </div><br>
                    <div class="row">
                    <div class="col">
                            <label for="formGroupExampleInput" class="form-label">Fecha de Lanzamiento</label>
                            <input type="date" name="fechaSalidadLibro" value="<?php echo $data['fechaSalidadLibro']; ?>" id="fechaSalidadLibro">
                        </div>
                        <div class="col">
                            <input type="text" name="cantidad" value="<?php echo $data['cantidad']; ?>" class="form-control" placeholder="Cantidad" aria-label="cantidad">
                        </div>
                        
                    </div><br>
                    <div class="row">
                    <div class="col">
                            <input type="text" name="existencia" value="<?php echo $data['existencia']; ?>" class="form-control" placeholder="Existencia" aria-label="existencia">
                        </div>
                        <div class="col">
                            <label for="formGroupExampleInput" class="form-label">Seleccione NIT del Editorial</label>
                            <select name="editorial_nit" value="<?php echo $data['editorial_nit']; ?>" class="form-select" aria-label="NitEditorial">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div><br>

                    </div>
                    <br>
                    <button type="reset" class="btn btn-secondary btn-sm ms-1">Cancelar</button>
                    <button type="submit" class="btn btn-success  btn-sm ms-1">Enviar</button>
                </form>
            </div>
    </main>

    <?php require_once APPROOT . "/views/inc/footer.php" ?>