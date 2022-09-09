<?php require_once APPROOT . "/views/inc/header.php" ?>


<!-- <div class="container-fluid">
  <div class="row"> -->
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <div class="card">
      <div class="card-body">
        <h1 class="text-center">LIBROS</h1>
        <br>
        <div>
          <a class="btn btn-sm btn-outline-secondary" href="<?php echo URLROOT; ?>libro/addLibro"><i class="bi bi-person-plus"></i>
            Insertar
          </a>
          <a class="btn btn-sm btn-outline-secondary" href="<?php echo URLROOT; ?>Libro/imprimirReporte"><i class="bi bi-filetype-pdf"></i>
            Reporte
          </a>
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
              <th>titulo</th>
              <th>autor</th>
              <th>descripcion</th>
              <th>categoria</th>
              <th>cantidad</th>
              <th>existencia</th>
            </tr>
          </thead>
          <tbody>
            <tfoot>
              <tr>
                <th>titulo</th>
                <th>autor</th>
                <th>descripcion</th>
                <th>categoria</th>
                <th>cantidad</th>
                <th>existencia</th>
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


</main>
<script src="<?php echo URLROOT; ?>js/bootstrap.bundle.min.js"></script>
<script src="<?php echo URLROOT; ?>jQuery-3.6.0/jquery-3.6.0.min.js"></script>
<script src="<?php echo URLROOT; ?>DataTables-1.12.1/js/jquery.dataTables.min.js"></script>
<script src="<?php echo URLROOT; ?>js/libro.js"></script>



<?php require_once APPROOT . "/views/inc/footer.php" ?>