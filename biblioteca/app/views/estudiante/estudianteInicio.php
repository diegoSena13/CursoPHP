<?php require_once APPROOT . "/views/inc/header.php" ?>

<body>
  <!-- <div class="container-fluid">
  <div class="row"> -->
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <div class="card">
        <div class="card-body">
        <h1 class="text-center">ESTUDIANTE</h1>
          <a class="btn btn-success" href="<?php echo URLROOT; ?>Estudiante/addForm">
            Insertar
          </a>
          <a class="btn btn-success" href="<?php echo URLROOT; ?>Estudiante/imprimirReporte">
            Reporte
          </a>
          <table class="table table-striped">
            <thead>
              <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Apellido</th>
                <th>correo</th>
                <th>telefono</th>
                <th>direccion</th>
                <th>Accion</th>
                <th>Accion</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php foreach ($data as $estudiante) :; ?>
                  <td><?php echo $estudiante->idUsuario; ?></td>
                  <td><?php echo $estudiante->nombre; ?></td>
                  <td><?php echo $estudiante->apellido1; ?></td>
                  <td><?php echo $estudiante->apellido2; ?></td>
                  <td><?php echo $estudiante->correo; ?></td>
                  <td><?php echo $estudiante->telefono; ?></td>
                  <td><?php echo $estudiante->direccion; ?></td>
                  <td><a class="btn btn-primary btn-sm" href="<?php echo URLROOT; ?>Estudiante/editarEstudiante/<?php echo $estudiante->idUsuario;  ?>">Editar</a></td>
                  <td><a class="btn btn-danger btn-sm" href="<?php echo URLROOT; ?>Estudiante/eliminarEstudiante/<?php echo $estudiante->idUsuario;  ?>">Eliminar</a></td>
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