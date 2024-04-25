<?php

namespace config;

use Config\view;

class Router {
    private const SERVER ="http://backend.main/";
    private const DEP_IMG = self::SERVER."public/img/";
    private const DEP_JS = self::SERVER."public/js/";
    private const DEP_CSS = self::SERVER."public/css/";
    private $directorio;
    private $controller;
    private $method;

    public function __construct(){
        define('DIRECTORIO', array(
            'home' => 'view/home',
            'login' => 'view/login',
            'validarLogin' => 'view/login/validar',
            'error' => 'view/error'
        ));
    }


    public function get($ruta, $metodo, $rutaHttp = 'GET')  {
        $ruta_final = trim($ruta, '/');
        $this->directorio['GET'][$ruta_final] = $metodo;
        $this->directorio[$rutaHttp][$ruta_final] = $metodo;
    }

    public function route() {
        $vista = isset($_REQUEST['view']) ? $_REQUEST['view'] : 'home';
        $metodo_envio_datos = $_SERVER['REQUEST_METHOD'];
        //GET Y POST
        if (array_key_exists($metodo_envio_datos, $this->directorio)) {
            $mi_vista = $this->directorio[$metodo_envio_datos];
            // echo print_r($this->directorio[$_SERVER['REQUEST_METHOD']]);
            // login
            if (array_key_exists($vista, $mi_vista)){
                // echo print_r($this->directorio[$_SERVER['REQUEST_METHOD']][$vista]);
                $datos_vista = $mi_vista[$vista];
                // echo print_r($mi_vista[$vista]);
                require_once './app/controller/'.$datos_vista[0].'.php';
               $this->controller = $datos_vista[0];
               $this->method = $datos_vista[1];
               $metodo = $this->method;
                $controlador = new $this->controller();
                $controlador->$metodo();
                //eliminar put,delay,post,y crear rutas con meotodos
                }
            }else {
                require_once './view/error.view.php';
        }
    }

    public function enlace($ruta){
        return self::SERVER . $ruta;
    }

    public function dep_css($archivo){
        return self::DEP_CSS.$archivo;
    }

    public function dep_js($archivo){
        return self::DEP_JS.$archivo.'.js';
    }

    public function dep_img($archivo){
        return self::DEP_IMG.$archivo.'.img';
    }

    public function redirigir($ruta){
        echo '<script>window.location="/'.$ruta.'";</script>';
    }
}




