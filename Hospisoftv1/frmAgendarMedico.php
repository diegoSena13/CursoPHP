<?php
session_start();
error_reporting(0);
/* error_reporting(0); */
if (!isset($_SESSION['usuarioActivo'])) {
    header('Location: index.php');
} else {


    require_once 'app/listarMedicos.php';
    require_once 'plantillas/cabeceraP.php';
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
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Agendar Cita</h5>
                            <form action="app/insertarCita.php" method="POST">
                                <div class="mb-3">
                                    <label for="fechaCita" class="form-label">Fecha de la cita</label>
                                    <input type="date" class="form-control" id="fecha" name="fecha">
                                </div>
                                <!-- <div class="mb-3">
                                    <label for="horaCita" class="form-label">hora de la cita</label>
                                    <input type="time" class="form-control" id="horaCita" name="horaCita">
                                </div> -->
                                <label for="horaCita">Hora de la cita</label>
                                <select class="form-select" name="hora" id="hora">
                                    <option value="0800">8:00 AM</option>
                                    <option value="0900">9:00 AM</option>
                                    <option value="1000">10:00 AM</option>
                                    <option value="1100">11:00 AM</option>
                                    <option value="1300">1:00 PM</option>
                                    <option value="1400">2:00 PM</option>
                                    <option value="1500">3:00 PM</option>
                                    <option value="1600">4:00 PM</option>
                                    <option value="1700">5:00 PM</option>
                                </select>
                                <br>
                                <label for="medico">Medico</label>
                                <select class="form-select" name="idMedico" id="idMedico">
                                    <!-- plantillas php para html con php puro -->
                                    <?php foreach ($medicos as $medico) : ?>
                                        <option value="<?php echo $medico->idMedico; ?>"><?php echo $medico->nombreMedico . ' ' . $medico->apellidosMedico . '<-->' . $medico->especialidad; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <br>
                                <label for="motivoCita">Motivo de la consulta</label>
                                <br>
                                <textarea class="form-control" name="motivo" id="motivo" cols="60" rows="10"></textarea>
                                <br>
                                <input type="text" name="idPaciente" id="idPaciente" readonly value="<?php echo $_SESSION['idUsuario']; ?>">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <img class="img-fluid" src="images/médicos-influencers-en-Instagram.jpg" alt="">
                </div>
            </div>
        </div>
    </main>


<?php
    require_once 'plantillas/footer.php';
}
?>