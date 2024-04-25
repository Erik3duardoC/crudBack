<?php
namespace config;
use config\Router;
require_once realpath('./vendor/autoload.php');

// $router = new Router();

    $router = new Router();
    $router->get("/validarLogin",['Login','iniciarSesion']);
    $router->get("/home",['Home','index']);
    $router->get("/login",['Login','index']);
    $router->get("/test",['Login','iniciarSesion']);
    $router->route();

?>  