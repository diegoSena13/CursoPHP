<?php
/*
clase base para manipular el gestor de base de datos
ORM base
*/

class Dbase
{
    private $host =DB_HOST;
    private $user =DB_USER;
    private $password = DB_PASSWORD;
    private $bdatos = DB_NAME;

    private $dbh;  //para almacenar la conexion
    private $stmt;  // para los resultados de los querys statement
    private $error;  //para los errores
   
    /**
     * __construct
     * hacemos la conexion 
     * @return void
     */
    public function __construct()
    {

        //FIXME: agregar opciones mysql
        $dsn = "mysql:host=".$this->host.";dbname=".$this->bdatos.";charset=utf8";
        try {
            $this->dbh= new PDO($dsn,$this->user,$this->password);
        } catch (PDOException $error) {
            $this->error=$error->getMessage();
            echo "se ha generado un error en la conexion:".$this->error;
        }
    }

    //metodo para parametrizar las consultas
    //le deben llegar 3 parametros a la consulta
    //el parametro, el valor adjunto y el tipo de parametro
    //@return parametro
    
    /**
     * bind
     *
     * @param  mixed $parameter
     * @param  mixed $value
     * @param  mixed $type
     * @return void
     */
    public function bind($parameter,$value,$type=null)
    {
        if(is_null($type)){
            switch(true){
                case is_int($value):
                    $type=PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type=PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type=PDO::PARAM_NULL;
                    break;
                default:
                    $type=PDO::PARAM_STR;
                    break;
            }
            
        }
        $this->stmt->bindValue($parameter,$value,$type);
    }

    //procesar las consultas  y aplicar el prepare

    public function query($sql)
    {
        $this->stmt=$this->dbh->prepare($sql);
    }
    //ejecuta la consulta
    public function execute()
    {
        return $this->stmt->execute();
    }
    //ejecuta la consola y devuelve arreglo de objetos
    //o 
    public function getAll()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }
    //ejecuta la consola y devuelve una fila de el arreglo de objetos
    //o 
    public function getOne()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }
    //para la paginacion se necesita contar el numero de registros de la consulta

    public function rowCount()
    {
        $this->execute();
        return $this->stmt->rowCount;
    }
}