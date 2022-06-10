<?php
session_start();
error_reporting(0);
/* error_reporting(0); */
if (!isset($_SESSION['usuarioActivo'])) {
    header('Location: index.php');
} else {


    require_once 'app/listarMedicos.php';
    require_once 'plantillas/cabeceraM.php';
?>
    <!-- inicio del contenido -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h5>Agendar Citas</h5>
        </div>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-<?php echo $_SESSION['tipo']; ?> alert-dismissible fade show" role="alert">
                        <?php echo $_SESSION['mensaje'];

                        ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
                <div class="col-md-12">
                    <form action="">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Datos Generales</h5>
                                <div class="mb-3">
                                    <label for="fecha" class="form-label">fecha</label>
                                    <input type="datetime" class="form-control" id="fecha" name="fecha">
                                </div>
                                <div class="mb-3">
                                    <label for="medico" class="form-label">medico</label>
                                    <input type="text" class="form-control" id="medico" name="medico">
                                </div>
                                <div class="mb-3">
                                    <label for="identificacionPaciente" class="form-label">identificacion paciente</label>
                                    <input type="text" class="form-control" id="idPaciente" name="idPaciente">
                                </div>
                                <div class="mb-3">
                                    <label for="nombrePaciente" class="form-label">nombre del paciente</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="">
                                </div>
                                <div class="mb-3">
                                    <label for="fechaPaciente" class="form-label">fecha de naciemiento del paciente</label>
                                    <input type="datetime" class="form-control" id="fechaPaciente" name="fechaPaciente">
                                </div>
                                <div class="mb-3">
                                    <label for="edadPaciente" class="form-label">edad del paciente</label>
                                    <input type="number" class="form-control" id="edadPaciente" name="edadPaciente">
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Precondiciones</h5>
                                <div class="mb-3">
                                    <input type="checkbox" class="form-check-input" id="diabetes" name="diabetes">
                                    <label class="form-check-label" for="exampleCheck1">Diabetes</label>
                                </div>
                                <div class="mb-3">
                                    <input type="checkbox" class="form-check-input" id="Colesterol" name="Colesterol">
                                    <label class="form-check-label" for="exampleCheck1">Colesterol</label>
                                </div>
                                <div class="mb-3">
                                    <input type="checkbox" class="form-check-input" id="Hipertension" name="Hipertension">
                                    <label class="form-check-label" for="exampleCheck1">Hipertension</label>
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="otraCondicion" name="otraCondicion"></textarea>
                                    <label class="form-check-label" for="exampleCheck1">otra condicion</label>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Chequeo Basico</h5>
                                <div class="mb-3">
                                    <label for="presionAlta" class="form-label">presion alta</label>
                                    <input type="number" class="form-control" id="presionAlta" name="presionAlta">
                                </div>
                                <div class="mb-3">
                                    <label for="presionBaja" class="form-label">presion baja</label>
                                    <input type="number" class="form-control" id="presionBaja" name="presionBaja">
                                </div>
                                <div class="mb-3">
                                    <label for="saturacion" class="form-label">saturacion</label>
                                    <input type="number" class="form-control" id="saturacion" name="saturacion">
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="reportePaciente" name="reportePaciente"></textarea>
                                    <label class="form-check-label" for="exampleCheck1">Reporte del paciente</label>
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="diagnosticoMedico" name="diagnosticoMedico"></textarea>
                                    <label class="form-check-label" for="exampleCheck1">diagnostico medico</label>
                                </div>

                                <input type="text" name="idPaciente" id="idPaciente" readonly value="<?php echo $_SESSION['idUsuario']; ?>">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </main>


<?php
    require_once 'plantillas/footer.php';
}
?>