<?php
//modelo correspondiente a cada controlador
class detallePrestamoModel
{

    private $db;

    public function __construct()
    {
        $this->db = new Dbase;
    }


    //retorna todos los registros
    public function getAll()
    {
        $this->db->query("SELECT * FROM detalleformula");
        $resultSet = $this->db->getAll();
        return $resultSet;
    }


    public function add($data, $numFormula)
    {
        $numeroFilas = 0;
        while ($numeroFilas < count($data['titulo'])) {
            $this->db->query("INSERT INTO `detalleprestamo`(`tituloLibro`, `autorLibro`, `categoriaLibro`, `fechaSalida`, `fechaEntrega`, `libro_id`, `encabezadoPrestamo_consecutivo`) VALUES (:titulo,:autor,:categoria,:fechaSalida,:fechaEntrega,:idLibro,:consecutivo)");
            //vinculamos las variables del array con los parametros de la consulta
            $this->db->bind(':titulo', $data['titulo'][$numeroFilas]);
            $this->db->bind(':autor', $data['autor'][$numeroFilas]);
            $this->db->bind(':categoria', $data['categoria'][$numeroFilas]);
            $this->db->bind(':fechaSalida', $data['fechaSalida'][$numeroFilas]);
            $this->db->bind(':fechaEntrega', $data['fechaEntrega'][$numeroFilas]);
            $this->db->bind(':idLibro', $data['id'][$numeroFilas]);
            $this->db->bind(':consecutivo', $numFormula);
            
            $resulset = $this->db->execute();
            $numeroFilas = $numeroFilas + 1;
        }
        if ($resulset) {
            return true;
        } else {
            return false;
        }
    }
}