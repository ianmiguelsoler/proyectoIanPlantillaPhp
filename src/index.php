<?php

//include_once "View/landing.php";

include_once "Router/Router.php";
use Router\Router;

echo "estoy en el index";

$router = new Router();

//Mostraría una landing page, una agina estática
$router->addRoute('get','/',function(){
    include_once "View/landing.php";
});
$router->addRoute('get','/about',function(){
    include_once "View/about.php";
});

//Rutas enlazadas a controladores, lógica de la aplicación
$router->addRoute('get','/users',[\Controller\UsuarioController::class,'index']);
$router->addRoute('get','/users/create',[\Controller\UsuarioController::class,'create']);
$router->addRoute('post','/users',[\Controller\UsuarioController::class,'store']);
$router->addRoute('get','/users/{id}/edit',[\Controller\UsuarioController::class,'edit']);
$router->addRoute('put','/users/{id}',[\Controller\UsuarioController::class,'update']);
$router->addRoute('get','/users/{id}',[\Controller\UsuarioController::class,'show']);
$router->addRoute('delete','/users/{id}',[\Controller\UsuarioController::class,'destroy']);

var_dump($_SERVER);

$router->resolver('GET',"/");