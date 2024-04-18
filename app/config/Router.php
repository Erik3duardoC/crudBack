<?php

namespace config;

class Router {
    private const SERVER ="http://backend.main/";
    private const DEP_IMG = self::SERVER."public/img/";
    private const DEP_JS = self::SERVER."public/js/";
    private const DEP_CSS = self::SERVER."public/css/";

    public function __construct(){
        define('DIRECTORIO', array(
            'home' => 'view/home',
            'login' => 'view/login',
            'validarLogin' => 'view/login/validar',
            'error' => 'view/error'
        ));
    }
        
    

    public function route() {
        $vista = isset($_REQUEST['view']) ? $_REQUEST['view'] : 'home';
        if (array_key_exists($vista, DIRECTORIO)) {
            require_once DIRECTORIO[$vista].'.view.php';
        } else {
            require_once DIRECTORIO['error'].'.view.php';
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




