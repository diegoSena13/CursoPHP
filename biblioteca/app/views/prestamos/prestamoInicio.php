<?php require_once APPROOT . "/views/inc/header.php" ?>

<body>
  <!-- <div class="container-fluid">
  <div class="row"> -->
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <div class="card text-center">
        <div class="card-header">
          <a href="<?php echo URLROOT; ?>Prestamo/addForm" type="button" class="btn btn-sm btn-outline-secondary"><i class="bi bi-person-plus"></i> Insertar</a>
        </div>
        <div class="card-body">
          <h1 class="text-center">Control de Prestamo</h1>
          <!-- <img src="https://www1.upme.gov.co/simco/PublishingImages/Pagina_en_construccion.jpg" alt=""> -->
          <table class="table table-striped" id="tblPrestamo">
            <thead>
              <tr>
                <th>titulo</th>
                <th>autor</th>
                <th>categoria</th>
                <th>fecha de salida</th>
                <th>fecha de entrada</th>
                <th>encabezado</th>
              </tr>
            </thead>
            <tbody>
            <tfoot>
              <tr>
                <th>titulo</th>
                <th>autor</th>
                <th>categoria</th>
                <th>fecha de salida</th>
                <th>fecha de entrada</th>
                <th>encabezado</th>
              </tr>
            </tfoot>
            </tbody>
          </table>
        </div>
      </div>


    </div>


  </main>
  <script src="<?php echo URLROOT; ?>js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo URLROOT; ?>jQuery-3.6.0/jquery-3.6.0.min.js"></script>
  <script src="<?php echo URLROOT; ?>DataTables-1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo URLROOT; ?>js/sweetalert2.all.min.js"></script>
  <script src="<?php echo URLROOT; ?>js/prestamoVis.js"></script>