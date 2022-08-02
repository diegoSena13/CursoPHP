<?php require_once APPROOT . "/views/inc/header.php" ?>

<body>
  <!-- <div class="container-fluid">
  <div class="row"> -->
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <div class="card">
        <div class="card-body">
          <h1 class="text-center">Control de Penalización</h1>
          <a class="btn btn-success" href="<?php echo URLROOT; ?>Penalizacion/addForm">
            Insertar
          </a>
          <!-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Busqueda ¿?" aria-label="buscar">
        <button class="btn btn-outline-success" type="submit">Buscar</button> 
      </form>-->
          <table class="table table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Estado</th>
                <th>Nombre Estudiante</th>
                <th>Correo Estudiante</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php foreach ($data as $penalizacion) :; ?>
                  <td><?php echo $penalizacion->idPenalizacion; ?></td>
                  <td><?php echo $penalizacion->estado; ?></td>
                  <td><?php echo $penalizacion->nombreCliente; ?></td>
                  <td><?php echo $penalizacion->correoCliente; ?></td>
                  <td><a class="btn btn-primary btn-sm" href="<?php echo URLROOT; ?>Penalizacion/editarPenalizacion/<?php echo $penalizacion->idPenalizacion;  ?>">Editar</a></td>
                  <td><a class="btn btn-danger" href="<?php echo URLROOT; ?>Penalizacion/eliminarPenalizacion/<?php echo $penalizacion->idPenalizacion;  ?>">Eliminar</a></td>
              </tr>
            <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>
