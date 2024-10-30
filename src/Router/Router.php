<?php

namespace Router;

class Router
{
    private array $rutas;

    public function __construct()
    {
        $this->rutas=array();
    }

    public function addRoute(string $metodohttp,string $url,array|callable $accion){
        $this->rutas[$metodohttp][$url]=$accion;
    }

    public function resolver(string $metodohttp,string $url){
        //Lógica para crear una instancia y llamar al méthodo de la clase

    }
}