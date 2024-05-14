<?php
namespace config;
use config\Router;
require_once realpath('./vendor/autoload.php');

// $router = new Router();

    $router = new Router();
    $router->get("/validarLogin",['Login','iniciarSesion']);
    // $router->get("/home",['Home','index']);
    $router->get("/home",['Login','home']);
    $router->get("/login",['Login','index']);
    $router->get("/test",['Login','test']);
    $router->get("/",['home','index']);
    //router->run genera , el error estaba en una mayuscula de la ruta Home a home con minusculas
    // $router->run(); 

?>  