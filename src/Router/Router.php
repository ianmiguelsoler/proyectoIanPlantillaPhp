<?php

namespace Router;

use Controller\UsuarioController;

class Router
{
    private array $rutas;

    public function __construct()
    {
        $this->rutas=array();
    }

    public function addRoute(string $metodohttp,string $url,array|callable $accion){
        $this->rutas[strtoupper($metodohttp)][$url]=$accion;
    }

    public function resolver(string $metodohttp,string $url){
        //Lógica para crear una instancia y llamar al méthodo de la clase
        echo $metodohttp . "<br>". $url;
        $uriExplotada = explode("/",$url);

//        [UsuarioController::class,"edit"] = $this->rutas['GET']['/users/{id}/edit'];

        $accion = $this->rutas[$metodohttp][$this->cambiar_id_uri($url)];

        if(is_callable($accion)){
            //Tenemos que ejecutar una función anónima para mostrar una vista
            call_user_func($accion);
        }else{
            [$clase,$metodo]=$accion;
            $instance = new $clase();
            call_user_func_array([$instance, $metodo],[$uriExplotada[2]]);
        }
    }

    private function cambiar_id_uri($uri){
        $uriArray = explode("/",$uri);
        if(is_numeric($uriArray[2])){
            $uriArray[2] = "{id}";
        }
        return implode("/",$uriArray);
    }
}