<?php require_once APPROOT . "/views/inc/header.php" ?>


<!-- <div class="container-fluid">
  <div class="row"> -->
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <div class="card">
      <div class="card-body">
        <h1 class="text-center">EDITORIAL</h1>
        <br>
        <div>
          <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-target='#exampleModal2' data-bs-toggle='modal' id=""><i class="bi bi-person-plus"></i> Insertar</button>
          <a class="btn btn-sm btn-outline-secondary" href="<?php echo URLROOT; ?>Editorial/imprimirReporte"><i class="bi bi-filetype-pdf"></i>
            Reporte
          </a>
        </div>
        <br>
        <table class="table table-responsive" id="tblEditorial">
          <thead>
            <tr>
              <th>nit</th>
              <th>Nombre</th>
              <th>generos</th>
              <th>tipo</th>
              <th>ubicacion</th>
              <th>editar</th>
              <th>eliminar</th>
            </tr>
          </thead>
          <tbody>

          </tbody>
          <tfoot>
            <tr>
              <th>nit</th>
              <th>Nombre</th>
              <th>generos</th>
              <th>tipo</th>
              <th>ubicacion</th>
              <th>editar</th>
              <th>eliminar</th>
            </tr>
          </tfoot>
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
          <h5 class="modal-title" id="exampleModalLabel">Editar Editorial</h5>
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
          <h5 class="modal-title" id="exampleModalLabel">Insertar Editorial</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="">
          <form action="" id="frmInsertar" method="post">
            <div class="row">
              <div class="col">
                <input type="text" name="nit" class="form-control" placeholder="NIT" aria-label="nit">
              </div>
              <div class="col">
                <input type="text" name="nombre" class="form-control" placeholder="Nombre" aria-label="nombre">
              </div>
            </div><br>
            <div class="row">
              <div class="col">
                <input type="text" name="generosProduce" class="form-control" placeholder="Generos Produce" aria-label="GeneroProduce">
              </div>
              <div class="col">
                <label for="formGroupExampleInput" class="form-label">Seleccione Tipo</label>
                <select class="form-select" name="tipo" aria-label="tipo">
                  <option selected>Open this select menu</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
            </div><br>
            <div class="row">
              <div class="col">
                <input type="text" name="ubicacion" class="form-control" placeholder="Ubicación" aria-label="ubicacion">
              </div>
            </div><br>
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
<script src="<?php echo URLROOT; ?>js/editorial.js"></script>

<?php require_once APPROOT . "/views/inc/footer.php" ?>