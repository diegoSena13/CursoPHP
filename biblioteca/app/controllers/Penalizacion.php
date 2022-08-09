<?php
// controlador correspondiente
class Penalizacion extends Controller
{
    // contructor base clase libs-Controller
    public function __construct()
    {
           // clase modelo
        $this->PenalizacionModel = $this->loadModel('PenalizacionModel');
    }
       // función para traer todo las penalizaciones y mostrarlos en la vista penalizacionInicio
    public function index()
    {
        //$data=[];
          // traemos la data
        $data = $this->PenalizacionModel->listarPenalizacion();  //temporal porque no hay datos
        // renderisamos la vista
        $this->renderView('Penalizacion/penalizacionInicio', $data);
    }
    // función para taer la vista insertarPenalizacion
    public function addForm() 
    {
        $data = [];  //temporal porque no hay datos
        // renderisamos la vista
        $this->renderView('Penalizacion/insertarPenalizacion', $data);
    }
      // función que trae e inserta los datos del libro
    public function cargarPenalizacion()
    {
          // verificamos el metodo POST y traemos la data
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $data = [
                'idPenalizacion' => $_POST['idPenalizacion'],
                'estado' => $_POST['estado'],
                'nombreCliente' => $_POST['nombreCliente'],
                'correoCliente' => $_POST['correoCliente']   
            ];
            // insertamos la data
            $resultado = $this->PenalizacionModel->InsertarPenalizacion($data);
            if ($resultado) {
                $data = [
                    'mensaje' => 'insercion exitosa'
                ];
                // renderisamos la vista
                $this->renderView('Penalizacion/insertarPenalizacion', $data);
            } else {
                $data = [
                    'mensaje' => 'error en la insercion'
                ];
                // renderisamos la vista
                $this->renderView('Penalizacion/insertarPenalizacion', $data);
            }
        } else {
            echo 'Atención! los datos no fueron enviados de un formulario';
        }
    }
    // función para traer y editar una penalización
    public function editarPenalizacion($idPenalizacion)
    {
        // verificamos el metodo POST y traemos la data
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'idPenalizacion' => $idPenalizacion,  //$id
                'estado' => $_POST['estado'],
                'nombreCliente' => $_POST['nombreCliente'],
                'correoCliente' => $_POST['correoCliente']
            ];
            // editamos la data
            if ($this->PenalizacionModel->EditarPenalizacion($data)) {
                $data = [];
                // renderisamos la vista
                $this->renderView('dashboard/dashboard', $data);
            } else {
                die('ocurrió un error en la inserción !');
            };
        } else {
            $penalizacion = $this->PenalizacionModel->getOne($idPenalizacion);
            $data = [
                'idPenalizacion' => $penalizacion->idPenalizacion,
                'estado' => $penalizacion->estado,
                'nombreCliente' => $penalizacion->nombreCliente,
                'correoCliente' => $penalizacion->correoCliente
            ];
            // renderisamos la vista
            $this->renderView('Penalizacion/editarPenalizacion', $data);
        }
    }

    // función para eliminar una penalización
    public function eliminarPenalizacion($idPenalizacion)
    {
          // verificamos el metodo POST y traemos la data
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'idPenalizacion' => $idPenalizacion
            ];
            // eliminamos la data
            if ($this->PenalizacionModel->EliminarPenalizacion($data)) {
                // echo 'borrado';
                $data = [];
                // renderisamos la vista
                $this->renderView('dashboard/dashboard', $data);
            } else {
                die('ocurrió un error !');
            };
        } else {
            $penalizacion = $this->PenalizacionModel->getOne($idPenalizacion);
            $data = [
                'idPenalizacion' => $penalizacion->idPenalizacion,
                'estado' => $penalizacion->estado,
                'nombreCliente' => $penalizacion->nombreCliente,
                'correoCliente' => $penalizacion->correoCliente
            ];
            // renderisamos la vista
            $this->renderView('Penalizacion/eliminarPenalizacion', $data);
        }
    }
    // función imprimir reporte
    public function imprimirReporte()
    {
        // traemos la data
        $data = $this->EditorialModel->listarEditorial();
        //$data = [];
        // renderisamos la vista
        $this->renderView('editorial/rptEditorial', $data);
    }
}