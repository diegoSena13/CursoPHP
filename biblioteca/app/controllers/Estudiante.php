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
    /**
     * index
     * función para traer todo los estudiantes y mostrarlos en la vista estudianteInicio  
     * @param  mixed $currentPage
     * @return void
     */
    public function index($currentPage = 1)
    {
        $perPage = 15;
        $totalCount = $this->EstudianteModel->totalEstudiantes();
        $pagination = new Paginator($currentPage, $perPage, $totalCount);
        $offset = $pagination->offset();
        $estudiante = $this->EstudianteModel->totalPages($perPage, $offset);

        $data = [
            'estudiante' => $estudiante,
            'previous' => $pagination->previous(),
            'next' => $pagination->next(),
            'total' => $pagination->totalPages(),
            'currentPage' => $currentPage

        ];
        // renderisamos la vista
        $this->renderView('Estudiante/estudianteInicio', $data);
    }    
    /**
     * addForm
     * función para taer la vista insertarEstudiante
     * @return void
     */
    public function addForm()
    {
        $data = [];  //temporal porque no hay datos
        // renderisamos la vista
        $this->renderView('Estudiante/insertarEstudiante', $data);
    }    
    /**
     * cargarEstudiante
     * función que trae e inserta los datos del estudiante
     * @return void
     */
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
    /**
     * editarEstudiante
     * función para traer y editar un editorial 
     * @param  mixed $idUsuario
     * @return void
     */
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
    /**
     * eliminarEstudiante
     * función para eliminar un estudiante
     * @param  mixed $idUsuario
     * @return void
     */
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
    /**
     * imprimirReporte
     * función imprimir reporte    
     * @return void
     */
    public function imprimirReporte()
    {
        // traemos la data
        $data = $this->EstudianteModel->listarEstudiantes();
        //$data = [];
        // renderisamos la vista
        $this->renderView('estudiante/rptEstudiante', $data);
    }
    
    /**
     * search
     * función para buscar 
     * @return void
     */
    public function search()
    {
        $data = [
            "nombre" => $_POST['nombre']
        ];

        $data = $this->EstudianteModel->search($data);
        $this->renderView('estudiante/estudianteInicio', $data);
    }
}
