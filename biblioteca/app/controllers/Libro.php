<?php
// controlador correpondiente
class Libro extends Controller
{
    // contructor base clase libs-Controller
    public function __construct()
    {
        // clase modelo
        $this->LibroModel = $this->loadModel('LibroModel');
    }
    //  
    /**
     * index
     * función para traer todo los libros y mostrarlos en la vista libroInicio   
     * @param  mixed $currentPage
     * @return void
     */
    public function index($currentPage = 1)
    {
        $perPage = 15;
        $totalCount = $this->LibroModel->totalLibros();
        $pagination = new Paginator($currentPage, $perPage, $totalCount);
        $offset = $pagination->offset();
        $libro = $this->LibroModel->totalPages($perPage, $offset);

        $data = [
            'libro' => $libro,
            'previous' => $pagination->previous(),
            'next' => $pagination->next(),
            'total' => $pagination->totalPages(),
            'currentPage' => $currentPage

        ];
        $this->renderView('Libro/libroInicio', $data);
    }
    //    
    /**
     * addLibro
     * función para taer la vista insertarLibro 
     * @return void
     */
    public function addLibro()
    {
        $data = $this->LibroModel->fk();
        // renderisamos la vista
        $this->renderView('Libro/insertarLibro', $data);
    }
    //    
    /**
     * cargarLibro
     * función que trae e inserta los datos del libro 
     * @return void
     */
    public function cargarLibro()
    {
        // verificamos el metodo POST y traemos la data
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
            // insertamos la data
            $resultado = $this->LibroModel->InsertarLibro($data);
            if ($resultado) {
                $data = [
                    'mensaje' => 'insercion exitosa'
                ];
                // renderisamos la vista
                $this->renderView('Libro/insertarLibro', $data);
            } else {
                $data = [
                    'mensaje' => 'error en la insercion'
                ];
                // renderisamos la vista
                $this->renderView('Libro/insertarLibro', $data);
            }
        } else {
            echo 'Atención! los datos no fueron enviados de un formulario';
        }
    }
    // 
    /**
     * editarLibro
     * función para traer y editar un libro    
     * @param  mixed $id
     * @return void
     */
    public function editarLibro($id)
    {
        // verificamos el metodo POST y traemos la data
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
            // editamos la data
            if ($this->LibroModel->EditarLibro($data)) {
                $data = [];
                // renderisamos la vista
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
            // renderisamos la vista
            $this->renderView('Libro/editarLibro', $data);
        }
    }

    //    
    /**
     * eliminarLibro
     * función para eliminar un libro 
     * @param  mixed $id
     * @return void
     */
    public function eliminarLibro($id)
    {
        // verificamos el metodo POST y traemos la data
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'id' => $id
            ];
            // eliminamos la data
            if ($this->LibroModel->Eliminarlibro($data)) {
                // echo 'borrado';
                $data = [];
                // renderisamos la vista
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
            // renderisamos la vista
            $this->renderView('Libro/eliminarLibro', $data);
        }
    }
    //     
    /**
     * imprimirReporte
     * función imprimir reporte
     * @return void
     */
    public function imprimirReporte()
    {
        // traemos la data
        $data = $this->LibroModel->listarLibro();
        //$data = [];
        // renderisamos la vista
        $this->renderView('libro/rptLibro', $data);
    }
    
    /**
     * search
     * funcion para buscar
     * @return void
     */
    public function search()
    {
        $data = [
            "titulo" => $_POST['titulo']
        ];

        $data = $this->LibroModel->search($data);
        $this->renderView('libro/libroInicio', $data);
    }
}
