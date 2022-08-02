<?php

class Libro extends Controller
{
    public function __construct()
    {
        $this->LibroModel = $this->loadModel('LibroModel');
    }

    public function index()
    {
        //$data=[];
        $data = $this->LibroModel->listarLibro();  //temporal porque no hay datos
        $this->renderView('Libro/libroInicio', $data);
    }
    public function addLibro()
    {
        $data = [];  //temporal porque no hay datos
        $this->renderView('Libro/insertarLibro', $data);
    }
    public function cargarLibro()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $data = [
                'id' => $_POST['id'],
                'titulo' => $_POST['titulo'],
                'autor' => $_POST['autor'],
                'descripcion' => $_POST['descripcion'],
                'categoria' => $_POST['categoria'],
                'editorial' => $_POST['editorial'],
                'fechaSalidadLibro' => $_POST['fechaSalidadLibro'],
                'cantidad' => $_POST['cantidad'],
                'existencia' => $_POST['existencia'],
                'editorial_nit' => $_POST['editorial_nit'] 
            ];
            $resultado = $this->LibroModel->InsertarLibro($data);
            if ($resultado) {
                $data = [
                    'mensaje' => 'insercion exitosa'
                ];
                $this->renderView('Libro/insertarLibro', $data);
            } else {
                $data = [
                    'mensaje' => 'error en la insercion'
                ];
                $this->renderView('Libro/insertarLibro', $data);
            }
        } else {
            echo 'Atención! los datos no fueron enviados de un formulario';
        }
    }

    public function editarLibro($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'id' => $id,  //$id
                'titulo' => $_POST['titulo'],
                'autor' => $_POST['autor'],
                'descripcion' => $_POST['descripcion'],
                'categoria' => $_POST['categoria'],
                'editorial' => $_POST['editorial'],
                'fechaSalidadLibro' => $_POST['fechaSalidadLibro'],
                'cantidad' => $_POST['cantidad'],
                'existencia' => $_POST['existencia'],
                'editorial_nit' => $_POST['editorial_nit']
            ];

            if ($this->LibroModel->EditarLibro($data)) {
                $data = [];
                $this->renderView('dashboard/dashboard', $data);
            } else {
                die('ocurrió un error en la inserción !');
            };
        } else {
            $libro = $this->LibroModel->getOne($id);
            $data = [
                'id' => $libro->id,
                'titulo' => $libro->titulo,
                'autor' => $libro->autor,
                'descripcion' => $libro->descripcion,
                'categoria' => $libro->categoria,
                'editorial' => $libro->editorial,
                'fechaSalidadLibro' => $libro->fechaSalidadLibro,
                'cantidad' => $libro->cantidad,
                'existencia' => $libro->existencia,
                'editorial_nit' => $libro->editorial_nit
            ];
            $this->renderView('Libro/editarLibro', $data);
        }
    }


    public function eliminarLibro($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'id' => $id
            ];

            if ($this->LibroModel->Eliminarlibro($data)) {
                // echo 'borrado';
                $data = [];
                $this->renderView('dashboard/dashboard', $data);
            } else {
                die('ocurrió un error !');
            };
        } else {
            $libro = $this->LibroModel->getOne($id);
            $data = [
                'id' => $libro->id,
                'titulo' => $libro->titulo,
                'autor' => $libro->autor,
                'descripcion' => $libro->descripcion,
                'categoria' => $libro->categoria,
                'editorial' => $libro->editorial,
                'fechaSalidadLibro' => $libro->fechaSalidadLibro,
                'cantidad' => $libro->cantidad,
                'existencia' => $libro->existencia,
                'editorial_nit' => $libro->editorial_nit
            ];
            $this->renderView('Libro/eliminarLibro', $data);
        }
    }

    public function imprimirReporte()
    {
        $data = $this->LibroModel->listarLibro();
        //$data = [];
        $this->renderView('libro/rptLibro', $data);
    }
}
