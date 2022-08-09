<?php
// controlador correpondiente
class Estudiante extends Controller
{
     // contructor base clase libs-Controller
    public function __construct()
    {
        // clase modelo
        $this->EstudianteModel = $this->loadModel('EstudianteModel');
    }
     // función para traer todo los estudiantes y mostrarlos en la vista estudianteInicio
    public function index()
    {
        //$data=[];
        // traemos la data
        $data = $this->EstudianteModel->listarEstudiantes();  //temporal porque no hay datos
        // renderisamos la vista
        $this->renderView('Estudiante/estudianteInicio', $data);
    }
    // función para taer la vista insertarEstudiante
    public function addForm()
    {
        $data = [];  //temporal porque no hay datos
          // renderisamos la vista
        $this->renderView('Estudiante/insertarEstudiante', $data);
    }
    // función que trae e inserta los datos del estudiante
    public function cargarEstudiante()
    {
        // verificamos el metodo POST y traemos la data
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
            // insertamos la data
            $resultado = $this->EstudianteModel->insertarEstudiante($data);
            if ($resultado) {
                $data = [
                    'mensaje' => 'insercion exitosa'
                ];
                  // renderisamos la vista
                $this->renderView('Estudiante/insertarEstudiante', $data);
            } else {
                $data = [
                    'mensaje' => 'error en la insercion'
                ];
                  // renderisamos la vista
                $this->renderView('Estudiante/insertarEstudiante', $data);
            }
        } else {
            echo 'Atención! los datos no fueron enviados de un formulario';
        }
    }
    // función para traer y editar un editorial
    public function editarEstudiante($idUsuario)
    {
        // verificamos el metodo POST y traemos la data
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
            // editamos la data
            if ($this->EstudianteModel->editarEstudiante($data)) {
                $data = [];
                  // renderisamos la vista
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
              // renderisamos la vista
            $this->renderView('estudiante/editarEstudiante', $data);
        }
    }

    // función para eliminar un estudiante 
    public function eliminarEstudiante($idUsuario)
    {
        // verificamos el metodo POST y traemos la data
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'idUsuario' => $idUsuario
            ];
            // eliminamos la data
            if ($this->EstudianteModel->eliminarEstudiante($data)) {
                // echo 'borrado';
                $data = [];
                  // renderisamos la vista
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
              // renderisamos la vista
            $this->renderView('estudiante/eliminarEstudiante', $data);
        }
    }
    // función imprimir reporte
    public function imprimirReporte()
    {
        // traemos la data
        $data = $this->EstudianteModel->listarEstudiantes();
        //$data = [];
          // renderisamos la vista
        $this->renderView('estudiante/rptEstudiante', $data);
    }
}