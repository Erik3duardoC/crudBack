<?php

namespace controller;
use model\TablaLogin;
use config\Router;
session_start();

class Login{
    public function iniciarSesion(){
        $login = new TablaLogin();
        $route = new Router();
        $usuario = $login->consulta()->where('email',$_POST['email'])->first();
        if($usuario){
            if($usuario['password']== $_POST['password']){
                $_SESSION['datos_usuario'] = $usuario;
                // $ro  ute->redirigir('home');
            }else{
              //  $route->redirigir('login');
            }
        }else{
            //$route->redirigir('login');
        }
    }

    // public function registro(){
    //     $login = new TablaLogin();
    //     return $login->insercion(['email'=>'erik@gmail.com', 'pass'=>'369258147']);
    // }
    public function index(){
        // echo "HOLA";
    }
    public function home(){
        echo "HOLA";
        $login = new TablaLogin();
        echo json_encode($login->consulta()->all());
    }
    //Crear lo mismo pero con la misma tabla  
    public function test(){
        echo "HOLA";

    }
}
$controlador = new Login();

?>