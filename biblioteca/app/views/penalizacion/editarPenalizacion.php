<?php require_once APPROOT . "/views/inc/header.php" ?>

<body>
    <!-- <div class="container-fluid">
  <div class="row"> -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <div class="col-2">
                <h1>Editar Penalizaciones</h1>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="<?php echo URLROOT; ?>Penalizacion/editarPenalizacion/<?php echo $data['ididPenalizacion']; ?>" method="post">
                    <div class="row">
                        <div class="col">
                            <input type="text" name="ididPenalizacion" class="form-control" placeholder="ID" aria-label="id" value="<?php echo $data['ididPenalizacion']; ?>">
                        </div>
                        <div class="col">
                            <input type="text" name="estado" class="form-control" placeholder="Estado" aria-label="estado" value="<?php echo $data['estado']; ?>">
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col">
                            <input type="text" name="nombreCliente" value="<?php echo $data['nombreCliente']; ?>" class="form-control" placeholder="Nombre Estudiante" aria-label="nombreCliente">
                        </div>
                        <div class="col">
                            <input type="text" name="correoCliente" value="<?php echo $data['correoCliente']; ?>" class="form-control" placeholder="Correo Electronico" aria-label="correoCliente">
                        </div>
                    </div><br>
                    <button type="reset" class="btn btn-secondary btn-sm ms-1">Cancelar</button>
                    <button type="submit" class="btn btn-success  btn-sm ms-1">Enviar</button>
            </div>

            </form>
        </div>
    </main>

    <?php require_once APPROOT . "/views/inc/footer.php" ?>