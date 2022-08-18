<?php
// controlador correspondiente
class Editorial extends Controller
{
    // contructor base clase libs-Controller
    public function __construct()
    {
        // clase modelo
        $this->EditorialModel = $this->loadModel('EditorialModel');
    }
 // función para traer todo los editoriales y mostrarlos en la vista editorialInicio
    public function index($currentPage = 1)
    {
        $perPage = 15;
        $totalCount = $this->EditorialModel->totalEditoriales();
        $pagination = new Paginator($currentPage, $perPage, $totalCount);
        $offset = $pagination->offset();
        $editorial = $this->EditorialModel->totalPages($perPage, $offset);

        $data = [
            'editorial' => $editorial, 
            'previous' => $pagination->previous(),
            'next' => $pagination->next(),
            'total' => $pagination->totalPages(),
            'currentPage' => $currentPage

        ];
        // renderisamos la vista
        $this->renderView('editorial/editorialInicio', $data);
    }
// función para traer la vista insertarEditorial
    public function addForm() 
    {
        $data = [];  //temporal porque no hay datos
        $this->renderView('editorial/insertarEditorial', $data);
    }
    // función que trae e inserta los datos del editorial
    public function cargarEditorial()
    {
        // verificamos el metodo POST y traemos la data
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $data = [
                'nit' => $_POST['nit'],
                'nombre' => $_POST['nombre'],
                'generosProduce' => $_POST['generosProduce'],
                'tipo' => $_POST['tipo'],
                'ubicacion' => $_POST['ubicacion']
            ];
            // insertamos la data 
            $resultado = $this->EditorialModel->InsertarEditorial($data);
            if ($resultado) {
                $data = [
                    'mensaje' => 'insercion exitosa'
                ];
                // renderisamos la vista 
                $this->renderView('editorial/insertarEditorial', $data);
            } else {
                $data = [
                    'mensaje' => 'error en la insercion'
                ];
                // renderisamos la vista 
                $this->renderView('editorial/insertarEditorial', $data);
            }
        } else {
            echo 'Atención! los datos no fueron enviados de un formulario';
        }
    }
// función que para traer y editar un editorial
    public function editarEditorial($nit)
    {
        // verificamos el metodo POST y traemos la data
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'nit' => $nit,  //$id
                'nombre' => $_POST['nombre'],
                'generosProduce' => $_POST['generosProduce'],
                'tipo' => $_POST['tipo'],
                'ubicacion' => $_POST['ubicacion']
            ];
             // editamos la data 
            if ($this->EditorialModel->EditarEditorial($data)) {
                $data = [];
                // renderisamos la vista 
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
            // renderisamos la vista 
            $this->renderView('editorial/editarEditorial', $data);
        }
    }

    // función para eliminar un editorial
    public function eliminarEditorial($nit)
    {
        // verificamos el metodo POST y traemos la data
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'nit' => $nit
            ];
            // eliminamos la data
            if ($this->EditorialModel->EliminarEditorial($data)) {
                // echo 'borrado';
                $data = [];
                // renderisamos la vista 
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
            // renderisamos la vista 
            $this->renderView('editorial/eliminarEditorial', $data);
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

    public function search()
    {
        $data = [
            "nombre" => $_POST['nombre']
        ];

        $data = $this->EditorialModel->search($data);
        $this->renderView('editorial/editorialInicio', $data);
    }
}
