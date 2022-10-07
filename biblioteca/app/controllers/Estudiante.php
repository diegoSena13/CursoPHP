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
    public function index()
    {
        $data = [];
        // renderisamos la vista
        $this->renderView('Estudiante/estudianteInicio', $data);
    }
    public function dataTable()
    {
        $estudiante=$this->EstudianteModel->getTable();
        echo json_encode($estudiante);
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
       //cogemos todos los datos que llegan por el post
       $id=$_POST["idUsuario"];
        $nombre=$_POST["nombre"];
        $apellido1=$_POST["apellido1"];
        $apellido2=$_POST["apellido2"];
        $correo=$_POST["correo"];
        $telefono=$_POST["telefono"];
        $direccion=$_POST["direccion"];

       //los mandamos a el model
       $estudiante=$this->EstudianteModel->insertarEstudiante($id,$nombre,$apellido1,$apellido2,$correo,$telefono,$direccion);

       echo json_encode($estudiante);
    }   
    /**
     * editarEstudiante
     * función para traer y editar un editorial 
     * @param  mixed $idUsuario
     * @return void
     */
    public function editarEstudiante()
    {
        $id=$_POST["idUsuario"];
        
        $estudiante = $this->EstudianteModel->getOne($id); 
        $data = [
            'idUsuario' => $estudiante->idUsuario,
            'nombre' => $estudiante->nombre,
            'apellido1' => $estudiante->apellido1,
            'apellido2' => $estudiante->apellido2,
            'correo' => $estudiante->correo,
            'direccion' => $estudiante->direccion,
            'telefono' => $estudiante->telefono
        ]; 
        echo json_encode($data);
    } 
    
    public function editarEstudiante1()
    {
        $id=$_POST["idUsuario"];
        $nombre=$_POST["nombre"];
        $apellido1=$_POST["apellido1"];
        $apellido2=$_POST["apellido2"];
        $correo=$_POST["correo"];
        $telefono=$_POST["telefono"];
        $direccion=$_POST["direccion"];

        $estudiante=$this->EstudianteModel->editarEstudiante($id,$nombre,$apellido1,$apellido2,$correo,$telefono,$direccion);

        echo json_encode($estudiante);

    }
    /**
     * eliminarEstudiante
     * función para eliminar un estudiante
     * @param  mixed $idUsuario
     * @return void
     */
    public function eliminarEstudiante()
    {
        $id=$_POST["idUsuario"];
        $estudiante = $this->EstudianteModel->eliminarEstudiante($id);
        echo json_encode($estudiante);
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
