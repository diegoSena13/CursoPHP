<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="./images/nurse.ico" type="image/x-icon">
    <title>Centro Medico Lourdess!</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <img src="./images/LOGO.png" class="img-fluid" alt="...">
            </div>
            <div class="col-md-2">
                Cra 100 con 98 <br>
                Edificio la ceiba <br>
                Cali-Valle
            </div>
            <div class="col-md-2">
                Email: clinicalourdes@gmail.com <br>
                Citas Medicas: 536643836
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">:::::::::</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php"><i class="bi bi-house-heart"></i> Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="bi bi-info-square-fill"> Acerca de</i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="bi bi-people-fill"> contacto</i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="bi bi-journal-plus"> Citas</i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn" data-bs-toggle="modal" data-bs-target="#frmLogin"><i class="bi bi-key-fill"> Login</i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="row">
            <div class="col-md-5">
                <div class="card bg-dark mt-3 text-white tetx-center">
                <h5 class="modal-title" id="exampleModalLabel">Registro de pacientes</h5>
                    <div class="card-body">
                        <form method="POST" action="./crud/insertarContacto.php">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">nombre</label>
                                <input type="text" class="form-control" name="nombre" id="nombre">
                            </div>
                            <div class="mb-3">
                                <label for="apellidos" class="form-label">apellidos</label>
                                <input type="text" class="form-control" name="apellidos" id="apellidos">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">email</label>
                                <input type="email" class="form-control" name="email" id="email">
                            </div>
                            <div class="mb-3">
                                <label for="telefono" class="form-label">telefono</label>
                                <input type="text" class="form-control" name="telefono" id="telefono">
                            </div>
                            <div class="mb-3">
                                <label for="movil" class="form-label">movil</label>
                                <input type="text" class="form-control" name="movil" id="movil">
                            </div>

                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card bg-dark mt-3 text-white tetx-center">
                    <div class="card-body">

                        <div class="mb-3">
                            <label for="fechaNaci" class="form-label">fecha nacimento</label>
                            <input type="date" class="form-control" name="fechaNaci" id="fechaNaci">
                        </div>
                        <div class="mb-3">
                            <label for="eps_paciente" class="form-label">E.P.S</label>
                            <input type="text" class="form-control" name="eps_paciente" id="eps_paciente">
                        </div>
                        <div class="mb-3">
                            <label for="usuario" class="form-label">usuario del sistema</label>
                            <input type="text" class="form-control" name="usuario" id="usuario">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">password</label>
                            <input type="text" class="form-control" name="password" id="password">
                        </div>
                        <button type="submit" class="btn btn-primary">Registrarse</button>
                        <a class="btn btn-danger" href="index.php">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2">publicidad</div>
        </div>

        <div class="row mt-5 p-5 bg-dark text-white">
            <div class="col-md-6 ">
                Cra 100 con 98 <br>
                Edificio la ceiba <br>
                Cali-Valle
                <i class="bi bi-hospital-fill"></i>
            </div>
            <div class="col-md-6">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

</body>

</html>