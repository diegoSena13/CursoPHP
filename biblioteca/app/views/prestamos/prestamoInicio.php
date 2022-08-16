<?php require_once APPROOT . "/views/inc/header.php" ?>

<body>
  <!-- <div class="container-fluid">
  <div class="row"> -->
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <div class="card">
        <div class="card-body">
          <h1 class="text-center">Control de Prestamo</h1>
          <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Busqueda ¿?" aria-label="buscar">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Consecutivo</th>
                <th>Fecha</th>
                <th>Nombre Estudiante</th>
                <th>Correo Estudiante</th>
                <th>Telefono Estudiante</th>
                <th>Direccion Estudiante</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php foreach ($data as $emcabezadoPrestamo) :; ?>
                  <td><?php echo $emcabezadoPrestamo->consecutivo; ?></td>
                  <td><?php echo $emcabezadoPrestamo->fecha; ?></td>
                  <td><?php echo $emcabezadoPrestamo->nombreCliente; ?></td>
                  <td><?php echo $emcabezadoPrestamo->correoCliente; ?></td>
                  <td><?php echo $emcabezadoPrestamo->telefonoCliente; ?></td>
                  <td><?php echo $emcabezadoPrestamo->direccionCliente; ?></td>
                  <td><?php echo $libremcabezadoPrestamoo->usuario_idUsuario; ?></td>
                  <td><button type="button" class="btn btn-primary">Editar</button></td>
                  <td><button type="button" class="btn btn-danger">Eliminar</button></td>
              </tr>
            <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>

  
    </div>


  </main>