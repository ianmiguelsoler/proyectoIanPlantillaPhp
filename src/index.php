<?php

//include_once "View/landing.php";

include_once "Router/Router.php";
include_once "Controller/UsuarioController.php";
use Router\Router;
use Controller\UsuarioController;

//echo "estoy en el index";

$router = new Router();

//Mostraría una landing page, una agina estática
$router->addRoute('get','/',function(){
    include_once "View/landing.php";
});
$router->addRoute('GET','/about',function(){
    include_once "View/about.php";
});

//Rutas enlazadas a controladores, lógica de la aplicación
$router->addRoute('GET','/users',[\Controller\UsuarioController::class,'index']);
$router->addRoute('GET','/users/create',[\Controller\UsuarioController::class,'create']);
$router->addRoute('POST','/users',[\Controller\UsuarioController::class,'store']);
$router->addRoute('GET','/users/{id}/edit',[\Controller\UsuarioController::class,'edit']);
$router->addRoute('POST','/users/{id}',[\Controller\UsuarioController::class,'update']);
$router->addRoute('GET','/users/{id}',[\Controller\UsuarioController::class,'show']);
$router->addRoute('DELETE','/users/{id}',[\Controller\UsuarioController::class,'destroy']);

//var_dump($_SERVER);

$router->resolver($_SERVER['REQUEST_METHOD'],$_SERVER['REQUEST_URI']);