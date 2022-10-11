<?php

class Prestamo extends Controller
{
    public function __construct()
    {
        $this->PrestamoModel = $this->loadModel('PrestamoModel');
        $this->detallePrestamoModel = $this->loadModel('detallePrestamoModel');
    }

    public function index()
    {
        $data=[];
        //$data = $this->EditorialModel->listarEditorial();  //temporal porque no hay datos
        $this->renderView('prestamos/prestamoInicio', $data);
    }

    public function dataTable()
    {
        $prestamo=$this->PrestamoModel->getTable();
        echo json_encode($prestamo);
    }



    public function addForm()
    {
        $data = [];  //temporal porque no hay datos
        $this->renderView('prestamos/insertarPrestamo', $data);
    }

    public function guardar()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'fecha' => $_POST['fecha'],
                'nombre' => $_POST['nombre'],
                'correo' => $_POST['correo'],
                'telefono' => $_POST["telefono"],
                'direccion' => $_POST["direccion"],
                'identificacion' => $_POST["identificacion"],
                'id' => $_POST["id"],
                'titulo' => $_POST["titulo"],
                'autor' => $_POST["autor"],
                'categoria' => $_POST["categoria"],
                'fechaSalida' => $_POST["fechaSalida"],
                'fechaEntrega' => $_POST["fechaEntrega"]
            ];
            $resultado = $this->PrestamoModel->add($data);
            if ($resultado) {
                $numPrestamo = $this->PrestamoModel->getLast();
                $respuesta = $this->detallePrestamoModel->add($data, $numPrestamo);
            }
            if ($respuesta) {
                echo json_encode('Exito: Prestamo Creado !.');
            } else {
                echo json_encode('Error: No se puede crear el prestamo !.');
            }
        }
    }


    public function cargarPrestamo()
    {
        
    }

    public function editarPrestamo($nit)
    {
        
    }


    public function eliminarPrestamo($nit)
    {
        
    }
} 