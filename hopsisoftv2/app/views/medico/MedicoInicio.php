<?php require_once APPROOT."/views/inc/header.php"?>

<div class="container-fluid">
    <div class="row">
        <div class="col-6">
            <h1>Medico</h1>
        </div>
        <div class="col-6">
            <a href="<?php echo URLROOT;?>Medico/formAdd" type="button" class="btn btn-success">Agregar</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Especialidad</th>
                        <th>Accion</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php foreach($data as $medico):; ?>
                        <td><?php echo $medico->idMedico; ?></td>
                        <td><?php echo $medico->nombreMedico; ?></td>
                        <td><?php echo $medico->apellidosMedico; ?></td>
                        <td><?php echo $medico->especialidad; ?></td>
                        <td><button type="button" class="btn btn-primary">Editar</button></td>
                        <td><button type="button" class="btn btn-danger">Eliminar</button></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            
        </div>
    </div>
</div>


<?php require_once APPROOT."/views/inc/footer.php"?>