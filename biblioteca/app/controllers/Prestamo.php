<?php

class Prestamo extends Controller
{
    public function __construct()
    {
        $this->EditorialModel = $this->loadModel('EditorialModel');
    }

    public function index()
    {
        //$data=[];
        $data = $this->EditorialModel->listarEditorial();  //temporal porque no hay datos
        $this->renderView('prestamos/insertarPrestamo', $data);
    }
    public function addForm()
    {
        $data = [];  //temporal porque no hay datos
        $this->renderView('editorial/insertarEditorial', $data);
    }
    public function cargarEditorial()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $data = [
                'nit' => $_POST['nit'],
                'nombre' => $_POST['nombre'],
                'generosProduce' => $_POST['generosProduce'],
                'tipo' => $_POST['tipo'],
                'ubicacion' => $_POST['ubicacion']
            ];
            $resultado = $this->EditorialModel->InsertarEditorial($data);
            if ($resultado) {
                $data = [
                    'mensaje' => 'insercion exitosa'
                ];
                $this->renderView('editorial/insertarEditorial', $data);
            } else {
                $data = [
                    'mensaje' => 'error en la insercion'
                ];
                $this->renderView('editorial/insertarEditorial', $data);
            }
        } else {
            echo 'Atención! los datos no fueron enviados de un formulario';
        }
    }

    public function editarEditorial($nit)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'nit' => $nit,  //$id
                'nombre' => $_POST['nombre'],
                'generosProduce' => $_POST['generosProduce'],
                'tipo' => $_POST['tipo'],
                'ubicacion' => $_POST['ubicacion']
            ];

            if ($this->EditorialModel->EditarEditorial($data)) {
                $data = [];
                $this->renderView('dashboard/dashboard', $data);
            } else {
                die('ocurrió un error en la inserción !');
            };
        } else {
            $editorial = $this->EditorialModel->getOne($nit);
            $data = [
                'nit' => $editorial->nit,
                'nombre' => $editorial->nombre,
                'generosProduce' => $editorial->generosProduce,
                'tipo' => $editorial->tipo,
                'ubicacion' => $editorial->ubicacion
            ];
            $this->renderView('editorial/editarEditorial', $data);
        }
    }


    public function eliminarEditorial($nit)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'nit' => $nit
            ];

            if ($this->EditorialModel->EliminarEditorial($data)) {
                // echo 'borrado';
                $data = [];
                $this->renderView('dashboard/dashboard', $data);
            } else {
                die('ocurrió un error !');
            };
        } else {
            $editorial = $this->EditorialModel->getOne($nit);
            $data = [
                'nit' => $editorial->nit,
                'nombre' => $editorial->nombre,
                'generosProduce' => $editorial->generosProduce,
                'tipo' => $editorial->tipo,
                'ubicacion' => $editorial->ubicacion
            ];
            $this->renderView('editorial/eliminarEditorial', $data);
        }
    }
} 