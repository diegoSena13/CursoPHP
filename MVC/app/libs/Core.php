<?php
/*
clase base que arma las rutas abreviadas del mvc
controlador/metodo/parametro
p.ej: medico/crearFormulaMedica/$id
*/


class Core
{

    //setear los controladores, metodos y parametros iniciales de el MVC
    protected $defaultController = 'Inicio';
    protected $defaultMethod = 'index';
    protected $parameters = [];

    public function __construct()
    {
        $url = $this->getUrl();
        //$url = ["MEDICO", "HACERFORMULA", [1, 2, 3]]; //construye la clase y setea la url del mvc
        //1.0 verificamos si existe el controlador y lo invocamos

        if (file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
            $this->defaultController = ucwords($url[0]); //seteamos como controlador el invocado en la url
            unset($url[0]);
        }

        require_once '../app/controllers/' . $this->defaultController . '.php';
        $this->defaultController = new $this->defaultController;

        //2.0 invocamos el metodo correspondiente

        if (isset($url[1])) {
            if (method_exists($this->defaultController, $url[1])) {
                $this->defaultMethod = $url[1];
                unset($url[1]);
            }
        }

        //3.0 obtenemos los parametros que pasemos por la url
        $this->parameters = $url ? array_values($url) : [];
        call_user_func_array([$this->defaultController, $this->defaultMethod], $this->parameters); //asigna los parametros usamdo una funcion callback
    }
    /*
     * toma la ruta, la vuelve un arreglo y posteriormente en una ruta abreviada
     *@return $url
     **/
    public function getUrl()
    {

        $url = " "; //esta para almacenar  la ruta abreviada
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/'); //separa la ruta por porciones de acuerdo a el /
            $url = filter_var($url, FILTER_SANITIZE_URL); //sanitiza la ruta para asegurarse que sea una url
            $url = explode('/', $url);
            return $url;
        }
        return ['Inicio'];
    }
}
