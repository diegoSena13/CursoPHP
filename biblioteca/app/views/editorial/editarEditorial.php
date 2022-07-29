<?php require_once APPROOT . "/views/inc/header.php" ?>

<body>
    <!-- <div class="container-fluid">
  <div class="row"> -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <div class="col-2">
                <h1>Editar Editoriales</h1>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="<?php echo URLROOT; ?>Editorial/editarEditorial/<?php echo $data['nit']; ?>" method="post">
                    <div class="row">
                        <div class="col">
                            <input type="text" name="nit" class="form-control" placeholder="NIT" aria-label="nit" value="<?php echo $data['nit']; ?>">
                        </div>
                        <div class="col">
                            <input type="text" name="nombre" class="form-control" placeholder="Nombre" aria-label="nombre" value="<?php echo $data['nombre']; ?>">
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col">
                            <input type="text" name="generosProduce" value="<?php echo $data['generosProduce']; ?>" class="form-control" placeholder="Generos Produce" aria-label="GeneroProduce">
                        </div>
                        <div class="col">
                            <label for="formGroupExampleInput" class="form-label">Seleccione Tipo</label>
                            <select class="form-select" name="tipo" aria-label="tipo">
                                <option value="<?php echo $data['tipo']; ?>"><?php echo $data['tipo']; ?></option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col">
                            <input type="text" name="ubicacion" value="<?php echo $data['ubicacion']; ?>" class="form-control" placeholder="Ubicación" aria-label="ubicacion">
                        </div>
                    </div><br>
                    <button type="reset" class="btn btn-secondary btn-sm ms-1">Cancelar</button>
                    <button type="submit" class="btn btn-success  btn-sm ms-1">Enviar</button>
            </div>

            </form>
        </div>
    </main>

    <?php require_once APPROOT . "/views/inc/footer.php" ?>