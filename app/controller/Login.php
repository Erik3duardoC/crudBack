<?php

namespace controller;
use model\TablaLogin;
use config\Router;
require_once realpath('.../../vendor/autoload.php');
session_start();

class Login{
    public function iniciarSesion(){
        $login = new TablaLogin();
        $route = new Router();
        $usuario = $login->consulta()->where('email',$_POST['email'])->first();
        if($usuario){
            if($usuario['password']== $_POST['password']){
                $_SESSION['datos_usuario'] = $usuario;
                $route->redirigir('home');
            }else{
                $route->redirigir('login');
            }
        }else{
            $route->redirigir('login');
        }
    }

    public function registro(){
        $login = new TablaLogin();
        return $login->insercion(['email'=>'erik@gmail.com', 'pass'=>'369258147']);
    }
}

?>