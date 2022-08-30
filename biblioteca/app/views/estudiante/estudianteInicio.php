<?php require_once APPROOT . "/views/inc/header.php" ?>


<!-- <div class="container-fluid">
  <div class="row"> -->
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <div class="card">
      <div class="card-body">
        <h1 class="text-center">ESTUDIANTE</h1>
        <br>
        <div>
          <a class="btn btn-sm btn-outline-secondary" href="<?php echo URLROOT; ?>Estudiante/addForm"><i class="bi bi-person-plus"></i>
            Insertar
          </a>
          <a class="btn btn-sm btn-outline-secondary" href="<?php echo URLROOT; ?>Estudiante/imprimirReporte"><i class="bi bi-filetype-pdf"></i>
            Reporte
          </a>
        </div>
        <br>
        <form action="<?php echo URLROOT; ?>Estudiante/search" method="POST">
          <div class="input-group mb-2 w-50">
            <input type="text" class="form-control form-control-sm " placeholder="Nombre ..." aria-label="Recipient's username" aria-describedby="button-addon2" name="nombre">
            <button class="btn btn-secondary" type="submit"><i class="bi bi-search"></i></button>
          </div>
        </form>
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
              <th>Editar</th>
              <th>Eliminar</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data as $index => $fila) :; ?>
              <?php foreach ($fila as $index2 => $estudiante) :; ?>
                <tr>
                  <td><?php echo $estudiante->idUsuario; ?></td>
                  <td><?php echo $estudiante->nombre; ?></td>
                  <td><?php echo $estudiante->apellido1; ?></td>
                  <td><?php echo $estudiante->apellido2; ?></td>
                  <td><?php echo $estudiante->correo; ?></td>
                  <td><?php echo $estudiante->telefono; ?></td>
                  <td><?php echo $estudiante->direccion; ?></td>
                  <td><a class="btn btn-outline-secondary" href="<?php echo URLROOT; ?>Estudiante/editarEstudiante/<?php echo $estudiante->idUsuario;  ?>"><i class="bi bi-pencil-square"></i></a></td>
                  <td><a class="btn btn-outline-secondary" href="<?php echo URLROOT; ?>Estudiante/eliminarEstudiante/<?php echo $estudiante->idUsuario;  ?>"><i class="bi bi-trash"></i></a></td>
                </tr>
              <?php endforeach; ?>
            <?php endforeach; ?>
          </tbody>
        </table>
        <nav aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item"><a class="page-link" href="<?php echo $data["previous"]; ?>">Previo</a></li>
            <?php for ($index = 1; $index <= $data['total']; $index++) : ?>
              <li class="page-item"><a class="page-link" href=" <?php echo $index; ?>">
                  <?php echo $index; ?>
                </a></li>
            <?php endfor; ?>
            <li class="page-item"><a class="page-link" href=" <?php echo URLROOT; ?>Estudiante/<?php echo $data["next"]; ?>">Siguiente</a></li>
          </ul>
        </nav>
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