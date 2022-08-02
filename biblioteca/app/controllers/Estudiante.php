<?php

class Estudiante extends Controller
{
    public function __construct()
    {
        $this->EstudianteModel = $this->loadModel('EstudianteModel');
    }

    public function index()
    {
        //$data=[];
        $data = $this->EstudianteModel->listarEstudiantes();  //temporal porque no hay datos
        $this->renderView('Estudiante/estudianteInicio', $data);
    }
    public function addForm()
    {
        $data = [];  //temporal porque no hay datos
        $this->renderView('Estudiante/insertarEstudiante', $data);
    }
    public function cargarEstudiante()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $data = [
                'idUsuario' => $_POST['idUsuario'],
                'nombre' => $_POST['nombre'],
                'apellido1' => $_POST['apellido1'],
                'apellido2' => $_POST['apellido2'],
                'correo' => $_POST['correo'],
                'telefono' => $_POST['telefono'],
                'direccion' => $_POST['direccion']
            ];
            $resultado = $this->EstudianteModel->insertarEstudiante($data);
            if ($resultado) {
                $data = [
                    'mensaje' => 'insercion exitosa'
                ];
                $this->renderView('Estudiante/insertarEstudiante', $data);
            } else {
                $data = [
                    'mensaje' => 'error en la insercion'
                ];
                $this->renderView('Estudiante/insertarEstudiante', $data);
            }
        } else {
            echo 'Atención! los datos no fueron enviados de un formulario';
        }
    }

    public function editarEstudiante($idUsuario)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'idUsuario' => $_POST['idUsuario'],
                'nombre' => $_POST['nombre'],
                'apellido1' => $_POST['apellido1'],
                'apellido2' => $_POST['apellido2'],
                'correo' => $_POST['correo'],
                'telefono' => $_POST['telefono'],
                'direccion' => $_POST['direccion']
            ];

            if ($this->EstudianteModel->editarEstudiante($data)) {
                $data = [];
                $this->renderView('dashboard/dashboard', $data);
            } else {
                die('ocurrió un error en la inserción !');
            };
        } else {
            $estudiante = $this->EstudianteModel->getOne($idUsuario);
            $data = [
                'idUsuario' => $estudiante->idUsuario,
                'nombre' => $estudiante->nombre,
                'apellido1' => $estudiante->apellido1,
                'apellido2' => $estudiante->apellido2,
                'correo' => $estudiante->correo,
                'telefono' => $estudiante->telefono,
                'direccion' => $estudiante->direccion
            ];
            $this->renderView('estudiante/editarEstudiante', $data);
        }
    }


    public function eliminarEstudiante($idUsuario)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'idUsuario' => $idUsuario
            ];

            if ($this->EstudianteModel->eliminarEstudiante($data)) {
                // echo 'borrado';
                $data = [];
                $this->renderView('dashboard/dashboard', $data);
            } else {
                die('ocurrió un error !');
            };
        } else {
            $estudiante = $this->EstudianteModel->getOne($idUsuario);
            $data = [
                'idUsuario' => $estudiante->idUsuario,
                'nombre' => $estudiante->nombre,
                'apellido1' => $estudiante->apellido1,
                'apellido2' => $estudiante->apellido2,
                'correo' => $estudiante->correo,
                'telefono' => $estudiante->telefono,
                'direccion' => $estudiante->direccion
            ];
            $this->renderView('estudiante/eliminarEstudiante', $data);
        }
    }

    public function imprimirReporte()
    {
        $data = $this->EstudianteModel->listarEstudiantes();
        //$data = [];
        $this->renderView('estudiante/rptEstudiante', $data);
    }
}