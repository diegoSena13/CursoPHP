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
    public function index()
    {

        $data = [];
        $this->renderView('Libro/libroInicio', $data);
    }
    public function dataTable()
    {
        $libro=$this->LibroModel->getTable();
        echo json_encode($libro);
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
         //cogemos todos los datos que llegan por el post
       $id=$_POST["id"];
       $titulo=$_POST["titulo"];
       $autor=$_POST["autor"];
       $descripcion=$_POST["descripcion"];
       $categoria=$_POST["categoria"];
       $editorial=$_POST["editorial"];
       $fechaSalidad=$_POST["fechaSalidaLibro"];
       $cantidad=$_POST["cantidad"];
       $existencia=$_POST["existencia"];
       $editorial_nit=$_POST["editorial_nit"];

      //los mandamos a el model
      $libro=$this->LibroModel->InsertarLibro($id,$titulo,$autor,$descripcion,$categoria,$editorial,$fechaSalidad,$cantidad,$existencia,$editorial_nit);

      echo ($libro);
    }
    // 
    /**
     * editarLibro
     * función para traer y editar un libro    
     * @param  mixed $id
     * @return void
     */
    public function editarLibro()
    {
        $id=$_POST["idLibro"];
        
        $libro = $this->LibroModel->getOne($id);

        $data = [
            'id' => $libro->id,
            'titulo' => $libro->titulo,
            'autor' => $libro->autor,
            'descripcion' => $libro->descripcion,
            'editorial' => $libro->editorial,
            'fechaSalida' => $libro->fechaSalida,
            'cantidad' => $libro->cantidad,
            'existencia' => $libro->existencia,
            'editorial_nit' => $libro->editorial_nit
        ]; 
        echo json_encode($data);
    }


    //    
    /**
     * fk
     * función para buscar el nit y loa nombres de las editoriales
     * @param  mixed $id
     * @return void
     */
    public function fk()
    {
        
        $libro = $this->LibroModel->fk();
        echo json_encode($libro);
    }



    //    
    /**
     * eliminarLibro
     * función para eliminar un libro 
     * @param  mixed $id
     * @return void
     */
    public function eliminarLibro()
    {
        $id=$_POST["id"];
        $libro = $this->LibroModel->Eliminarlibro($id);
        echo json_encode($libro);
    }
    //     
    /**
     * imprimirReporte
     * función imprimir reporte
     * @return void
     */
    public function imprimirReporte()
    {
        if ($libro=$this->LibroModel->getTable()) {
            
            $data =$libro;
            echo json_encode($data);
            $this->renderView('libro/rptLibro', $data);

        }else{
            echo "error";
        }
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
