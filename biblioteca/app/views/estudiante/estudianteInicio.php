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
          <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-target='#exampleModal2' data-bs-toggle='modal' id=""><i class="bi bi-person-plus"></i> Insertar</button>
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
        <table class="table table-striped" id="tblEstudiantes">
          <thead>
            <tr>
              <th>id</th>
              <th>Nombre</th>
              <th>correo</th>
              <th>telefono</th>
              <th>direccion</th>
              <th>editar</th>
              <th>eliminar</th>
            </tr>
          </thead>
          <tbody>
          <tfoot>
            <tr>
              <th>id</th>
              <th>Nombre</th>
              <th>correo</th>
              <th>telefono</th>
              <th>direccion</th>
              <th>editar</th>
              <th>eliminar</th>
            </tr>
          </tfoot>
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

  <!-- Modal editar -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Estudiante</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="preguntaEditar">

        </div>
        <div class="modal-footer">
          <button type="" class="btn btn-primary" id="confirmarEdit">Confirmar</button>
          <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal eliminar-->
  <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar Editorial</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="preguntaEliminar">

        </div>
        <div class="modal-footer">
          <button type="" class="btn btn-primary" id="confirmarDelete">Confirmar</button>
          <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal insertar -->
  <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Insertar Estudiante</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="">
          <form action="" id="frmInsertar" method="post">
            <div class="row">
              <div class="col">
                <input type="text" class="form-control" name="idUsuario" id="idUsuario" placeholder="# Identificación" aria-label="identificacion">
              </div>
              <div class="col">
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" aria-label="nombre">
              </div>
            </div><br>
            <div class="row">
              <div class="col">
                <input type="text" class="form-control" name="apellido1" id="apellido1" placeholder="Primer Apellido" aria-label="1erApellido">
              </div>
              <div class="col">
                <input type="text" class="form-control" name="apellido2" id="apellido2" placeholder="Segundo Apellido" aria-label="2doApellido">
              </div>
            </div><br>
            <div class="row">
              <div class="col">
                <input type="email" class="form-control" name="correo" id="correo" placeholder="Correo" aria-label="correo">
              </div>
              <div class="col">
                <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Telefono" aria-label="telefono">
              </div>
            </div><br>
            <div class="row">
              <div class="col-md-6">
                <input type="email" class="form-control" name="direccion" id="direccion" placeholder="Dirección" aria-label="direccion">
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="" class="btn btn-primary" id="btnInsertar">Confirmar</button>
          <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>


</main>
<script src="<?php echo URLROOT; ?>js/bootstrap.bundle.min.js"></script>
<script src="<?php echo URLROOT; ?>jQuery-3.6.0/jquery-3.6.0.min.js"></script>
<script src="<?php echo URLROOT; ?>DataTables-1.12.1/js/jquery.dataTables.min.js"></script>
<script src="<?php echo URLROOT; ?>js/sweetalert2.all.min.js"></script>
<script src="<?php echo URLROOT; ?>js/estudiante.js"></script>



<?php require_once APPROOT . "/views/inc/footer.php" ?>