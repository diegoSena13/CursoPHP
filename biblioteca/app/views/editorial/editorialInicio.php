<?php require_once APPROOT."/views/inc/header.php"?>
  <body>
<!-- <div class="container-fluid">
  <div class="row"> -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div class="col-2">
            <h1>BIBLIOTECA</h1>
        </div>
        <div class="col-10">
        <table class="table">
                <thead>
                    <tr>
                        <th>nit</th>
                        <th>Nombre</th>
                        <th>generos</th>
                        <th>tipo</th>
                        <th>ubicacion</th>
                        <th>Accion</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php foreach($data as $editorial):; ?>
                        <td><?php echo $editorial->nit; ?></td>
                        <td><?php echo $editorial->nombre; ?></td>
                        <td><?php echo $editorial->generosProduce; ?></td>
                        <td><?php echo $editorial->tipo; ?></td>
                        <td><?php echo $editorial->ubicacion; ?></td>
                        <td><button type="button" class="btn btn-primary">Editar</button></td>
                        <td><button type="button" class="btn btn-danger">Eliminar</button></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
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
 
    

<?php require_once APPROOT."/views/inc/footer.php"?>