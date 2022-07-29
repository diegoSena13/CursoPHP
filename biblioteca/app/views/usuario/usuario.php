<?php require_once APPROOT . "/views/inc/header.php" ?>

<body>
  <!-- <div class="container-fluid">
  <div class="row"> -->
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <div class="card">
        <div class="card-body">
          <h1 class="text-center">Control de Usuarios</h1>
          <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Busqueda ¿?" aria-label="buscar">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
          <table class="table table-striped">
            <thead>
              <tr>
                <th>libros</th>
                <th>Estudiante</th>
                <th>Estado</th>
                <th>Existencias</th>
                <th>Cantidad</th>
                <th>Fecha del Prestamo</th>
                <th>Fecha devolución</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php foreach ($data as $librogg) :; ?>
                  <td><?php echo $libro->id; ?></td>
                  <td><?php echo $libro->titulo; ?></td>
                  <td><?php echo $libro->autor; ?></td>
                  <td><?php echo $libro->descripcion; ?></td>
                  <td><?php echo $libro->categoria; ?></td>
                  <td><?php echo $libro->editorial; ?></td>
                  <td><?php echo $libro->fechaSalidadLibro; ?></td>
                  <td><?php echo $libro->cantidad; ?></td>
                  <td><?php echo $libro->existencia; ?></td>
                  <td><?php echo $libro->editorial_nit; ?></td>
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