<?php require_once APPROOT . "/views/inc/header.php" ?>

<body>
  <!-- <div class="container-fluid">
  <div class="row"> -->
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <div class="card">
        <div class="card-body">
          <h1 class="text-center">LIBROS</h1>
          <a class="btn btn-success" href="<?php echo URLROOT; ?>libro/addLibro">
            Insertar
          </a>
          <a class="btn btn-success" href="<?php echo URLROOT; ?>Libro/imprimirReporte">
            Reporte
          </a>
          <table class="table table-striped">
            <thead>
              <tr>
                <th>id</th>
                <th>titulo</th>
                <th>autor</th>
                <th>descripcion</th>
                <th>categoria</th>
                <th>editorial</th>
                <th>fechaSalidadLibro</th>
                <th>cantidad</th>
                <th>existencia</th>
                <th>editorial_nit</th>
                <th>Accion</th>
                <th>Accion</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php foreach ($data as $libro) :; ?>
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
                  <td><a class="btn btn-primary btn-sm" href="<?php echo URLROOT; ?>Libro/editarLibro/<?php echo $libro->id;  ?>">Editar</a></td>
                  <td><a class="btn btn-danger" href="<?php echo URLROOT; ?>Libro/eliminarLibro/<?php echo $libro->id;  ?>">Eliminar</a></td>
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