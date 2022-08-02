<?php

class Penalizacion extends Controller
{
    public function __construct()
    {
        $this->PenalizacionModel = $this->loadModel('PenalizacionModel');
    }

    public function index()
    {
        //$data=[];
        $data = $this->PenalizacionModel->listarPenalizacion();  //temporal porque no hay datos
        $this->renderView('Penalizacion/penalizacionInicio', $data);
    }
    public function addForm() 
    {
        $data = [];  //temporal porque no hay datos
        $this->renderView('Penalizacion/insertarPenalizacion', $data);
    }
    public function cargarPenalizacion()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $data = [
                'idPenalizacion' => $_POST['idPenalizacion'],
                'estado' => $_POST['estado'],
                'nombreCliente' => $_POST['nombreCliente'],
                'correoCliente' => $_POST['correoCliente']   
            ];
            $resultado = $this->PenalizacionModel->InsertarPenalizacion($data);
            if ($resultado) {
                $data = [
                    'mensaje' => 'insercion exitosa'
                ];
                $this->renderView('Penalizacion/insertarPenalizacion', $data);
            } else {
                $data = [
                    'mensaje' => 'error en la insercion'
                ];
                $this->renderView('Penalizacion/insertarPenalizacion', $data);
            }
        } else {
            echo 'Atención! los datos no fueron enviados de un formulario';
        }
    }

    public function editarPenalizacion($idPenalizacion)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'idPenalizacion' => $idPenalizacion,  //$id
                'estado' => $_POST['estado'],
                'nombreCliente' => $_POST['nombreCliente'],
                'correoCliente' => $_POST['correoCliente']
            ];

            if ($this->PenalizacionModel->EditarPenalizacion($data)) {
                $data = [];
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
            $this->renderView('Penalizacion/editarPenalizacion', $data);
        }
    }


    public function eliminarPenalizacion($idPenalizacion)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'idPenalizacion' => $idPenalizacion
            ];

            if ($this->PenalizacionModel->EliminarPenalizacion($data)) {
                // echo 'borrado';
                $data = [];
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
            $this->renderView('Penalizacion/eliminarPenalizacion', $data);
        }
    }

    public function imprimirReporte()
    {
        $data = $this->EditorialModel->listarEditorial();
        //$data = [];
        $this->renderView('editorial/rptEditorial', $data);
    }
}