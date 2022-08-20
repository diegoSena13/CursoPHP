<?php
/*
clase base controlador del mvc
*/

class Controller{

    /**
     * loadModel
     * cargar el modelo correspondiente
     * @param  mixed $model
     * @return void
     */
    public function loadModel($model){

        require_once '../app/models/' . $model . '.php';
        //instanciamos la clase modelo
         return new $model();
    }
    
    /**
     * renderView
     * cargamos la vista correspondiente o renderizamos la vista
     * @param  mixed $view
     * @param  mixed $data
     * @return void
     */
    public function renderView($view,$data=[]){
        if(file_exists('../app/views/'.$view. '.php')){
            require_once '../app/views/' . $view . '.php';
        }
        else{
            die('no existe la vista invocada!!');
        }
    }
}