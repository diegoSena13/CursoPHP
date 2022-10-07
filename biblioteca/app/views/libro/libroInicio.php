<?php require_once APPROOT . "/views/inc/header.php" ?>


<!-- <div class="container-fluid">
  <div class="row"> -->
<main id="main" class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <div class="card">
      <div class="card-body">
        <h1 class="text-center">LIBROS</h1>
        <br>
        <div>
          <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-target='#exampleModal2' data-bs-toggle='modal' id="btnIniciarModal"><i class="bi bi-person-plus"></i> Insertar</button>
          <button type="button" id="btnImprimir" class="btn btn-sm btn-outline-secondary" href=""><i class="bi bi-filetype-pdf"></i>
            Reporte
          </button>
        </div>
        <br>
        <form action="<?php echo URLROOT; ?>Libro/search" method="POST">
          <div class="input-group mb-2 w-50">
            <input type="text" class="form-control form-control-sm " placeholder="titulo ..." aria-label="Recipient's username" aria-describedby="button-addon2" name="titulo">
            <button class="btn btn-secondary" type="submit"><i class="bi bi-search"></i></button>
          </div>
        </form>
        <table class="table table-striped" id="tblLibro">
          <thead>
            <tr>
              <th>id</th>
              <th>titulo</th>
              <th>autor</th>
              <th>descripcion</th>
              <th>categoria</th>
              <th>cantidad</th>
              <th>existencia</th>
              <th>editar</th>
              <th>eliminar</th>
            </tr>
          </thead>
          <tbody>
          <tfoot>
            <tr>
              <th>id</th>
              <th>titulo</th>
              <th>autor</th>
              <th>descripcion</th>
              <th>categoria</th>
              <th>cantidad</th>
              <th>existencia</th>
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
          <h5 class="modal-title" id="exampleModalLabel">Editar Libro</h5>
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
          <h5 class="modal-title" id="exampleModalLabel">Eliminar Libro</h5>
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
          <h5 class="modal-title" id="exampleModalLabel">Insertar libro</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="">
          <form action="" id="frmInsertar" method="post">
            <div class="row">
              <div class="col">
                <input type="text" name="id" id="id" class="form-control" placeholder="ID" aria-label="id">
              </div>
              <div class="col">
                <input type="text" name="titulo" id="titulo" class="form-control" placeholder="Titulo" aria-label="titulo">
              </div>

            </div><br>
            <div class="row">
              <div class="col">
                <input type="text" name="autor" id="autor" class="form-control" placeholder="Autor" aria-label="autor">
              </div>
              <div class="col">
                <input type="text" name="descripcion" id="descripcion" class="form-control" placeholder="Descripción" aria-label="descripcion">
              </div>

            </div><br>
            <div class="row">
              <div class="col">
                <label for="formGroupExampleInput" class="form-label">Seleccione Categoría</label>
                <select name="categoria" id="categoria" class="form-select" aria-label="categoria">
                  <option value="Científicos">Científicos</option>
                  <option value="Literatura y lingüísticos">Literatura y lingüísticos</option>
                  <option value="De viaje">De viaje</option>
                  <option value="Biografías">Biografías</option>
                  <option value="Libro de texto">Libro de texto</option>
                  <option value="Libros de gran formato (coffee table book)">Libros de gran formato (coffee table book)</option>
                  <option value="De referencia o consulta">De referencia o consulta</option>
                  <option value="Monografías">Monografías</option>
                  <option value="Recreativos">Recreativos</option>
                  <option value="Poéticos">Poéticos</option>
                  <option value="Juveniles">Juveniles</option>
                  <option value="Ficción">Ficción</option>
                  <option value="Comedia">Comedia</option>
                </select>
              </div>
              <div class="col">
                <label for="formGroupExampleInput" class="form-label">Seleccione el Editorial</label>
                <select name="editorial" id="editorial" class="form-select" aria-label="editorial">

                </select>
              </div>

            </div><br>
            <div class="row">
              <div class="col">
                <label for="formGroupExampleInput" class="form-label">Fecha de Lanzamiento</label>
                <input type="date" name="fechaSalidadLibro" id="fechaSalidadLibro">
              </div>
              <div class="col">
                <input type="text" name="cantidad" id="cantidad" class="form-control" placeholder="Cantidad" aria-label="cantidad">
              </div>

            </div><br>
            <div class="row">
              <div class="col">
                <input type="text" name="existencia" id="existencia" class="form-control" placeholder="Existencia" aria-label="existencia">
              </div>
              <div class="col">
                <label for="formGroupExampleInput" class="form-label">Seleccione NIT del Editorial</label>
                <select name="editorial_nit" id="editorial_nit" class="form-select" aria-label="NitEditorial">

                </select>
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
<script src="<?php echo URLROOT; ?>js/libro.js"></script>



<?php require_once APPROOT . "/views/inc/footer.php" ?>