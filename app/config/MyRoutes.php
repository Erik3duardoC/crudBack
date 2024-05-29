<?php
namespace config;
use config\Router;
require_once realpath('./vendor/autoload.php');

// $router = new Router();

    $router = new Router();
    $router->get("/validarLogin",['login','iniciarSesion']);
    // $router->get("/home",['Home','index']);
    $router->get("/home",['login','home']);
    $router->get("/login",['login','index']);
    $router->get("/test",['login','test']);
    $router->get("/",['home','index']);
    //router->run genera , el error estaba en una mayuscula de la ruta Home a home con minusculas
    // $router->run(); 

?>  