<?php
namespace Config;
require_once realpath('./vendor/autoload.php');
use Config\view;

class Router {
    private const SERVER ="http://backend.main.com/";
    private const DEP_IMG = self::SERVER."public/img/";
    private const DEP_JS = self::SERVER."public/js/";
    private const DEP_CSS = self::SERVER."public/css/";
    private const ERROR = 'view/error.view.php';

    // private $directorio;
    private $controller;
    private $method;
    private $routes = [];
    private $ruta2 = [];
    protected $importacion; 

    //define('DIRECTORIO'
    public function __construct(){
        $this->importacion;
    }

    //eliminar put,delay,post,y crear rutas con meotodos
    //get,post,put,delete
    public function GET($ruta, $metodo)  {
        $ruta_final = trim($ruta, '/');
        $this->routes['GET'][$ruta_final] = $metodo;
        //$this->directorio[$rutaHttp][$ruta_final] = $metodo;
    }
    public function POST($ruta, $metodo)  {
        $ruta_final = trim($ruta, '/');
        $this->routes['POST'][$ruta_final] = $metodo;
    }
    public function PUT($ruta, $metodo)  {
        $ruta_final = trim($ruta, '/');
        $this->routes['PUT'][$ruta_final] = $metodo;
    }
    public function DELETE($ruta, $metodo)  {
        $ruta_final = trim($ruta, '/');
        $this->routes['DELETE'][$ruta_final] = $metodo;
    }

    public function route() {
        $vista = isset($_REQUEST['view']) ? $_REQUEST['view'] : 'home';
        $metodo_envio_datos = $_SERVER['REQUEST_METHOD'];
        // $this->controller = null;
        // $controlador = null;
        //GET Y POST
        if (array_key_exists($metodo_envio_datos, $this->routes)) {
            $mi_vista = $this->routes[$metodo_envio_datos];
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
            }else {
                require_once './view/error.view.php';
            }
        }else{
            //metodos no permitidos
                require_once './view/error.view.php'; 
            }
        }

        public function match_route($ruta,$method){
            if (preg_match('/[a-zA-Z09_-]\/[a-zA-Z09_-]/',$ruta)) {
                $this->ruta2 = explode('/',$ruta);
                $this->controller = array_key_exists($this->ruta2[0], $this->routes
                [$method]) ? $this->routes[$method][$this->ruta2[0]] : self::ERROR;
            }else{
                $this->controller = array_key_exists($ruta,$this->routes[$method]) ?
                $this->routes[$method][$ruta] : self::ERROR;
            }
            $this->method = $this->controller[1];
            require_once './app/controller/'. $this->controller[0].'.php';
            $this->importacion = $controlador;
        }

        public function run(){
            $ruta = $_SERVER['REQUEST_URI'];
            $ruta = trim($ruta, '/');
            $this->match_route($ruta,$_SERVER['REQUEST_METHOD']);
            $metodo = $this->method;
            $this->importacion->$metodo();
        }

    public function enlace($ruta){
        return self::SERVER . $ruta;
    }

    public function dep_css($archivo){
        return self::DEP_CSS.$archivo.'.css';
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




