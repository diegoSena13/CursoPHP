<?php require_once APPROOT . "/views/inc/header.php" ?>

<body>
  <!-- <div class="container-fluid">
  <div class="row"> -->
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <div class="card">
        <div class="card-body">
          <h1 class="text-center">EDITORIAL</h1>
          <br>
          <a class="btn btn-success" href="<?php echo URLROOT; ?>Editorial/addForm">
            Insertar
          </a>
          <a class="btn btn-success" href="<?php echo URLROOT; ?>Editorial/imprimirReporte">
            Reporte
          </a>
          <br>
          <form action="<?php echo URLROOT; ?>Editorial/search" method="POST">
            <div class="input-group mb-2 w-50">
              <input type="text" class="form-control form-control-sm " placeholder="Nombre ..." aria-label="Recipient's username" aria-describedby="button-addon2" name="nombre">
              <button class="btn btn-secondary" type="submit"><i class="bi bi-search"></i></button>
            </div>
          </form>
          <table class="table table-striped">
            <thead>
              <tr>
                <th>nit</th>
                <th>Nombre</th>
                <th>generos</th>
                <th>tipo</th>
                <th>ubicacion</th>
                <th>Accion</th>
                <th>Accion</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php foreach ($data as $editorial) :; ?>
                  <td><?php echo $editorial->nit; ?></td>
                  <td><?php echo $editorial->nombre; ?></td>
                  <td><?php echo $editorial->generosProduce; ?></td>
                  <td><?php echo $editorial->tipo; ?></td>
                  <td><?php echo $editorial->ubicacion; ?></td>
                  <td><a class="btn btn-primary btn-sm" href="<?php echo URLROOT; ?>Editorial/editarEditorial/<?php echo $editorial->nit;  ?>">Editar</a></td>
                  <td><a class="btn btn-danger" href="<?php echo URLROOT; ?>Editorial/eliminarEditorial/<?php echo $editorial->nit;  ?>">Eliminar</button></td>
              </tr>
            <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>

      <!--  <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar" class="align-text-bottom"></span>
            This week
          </button>
        </div> -->
    </div>


  </main>



  <?php require_once APPROOT . "/views/inc/footer.php" ?>