<?php

    namespace controller;
    use model\TablaUsuarios;
    
    require_once realpath(".../../vendor/autoload.php");

    class Usuarios{
        public static function obtener_datos(){
            $cliente = new TablaUsuarios(); 
            echo json_encode($cliente->consulta());
        }
        public static function insertar_datos(){
            $cliente = new TablaUsuarios();
            echo json_encode($cliente->insercion(['correo'=>'Ariadna', 'pass' => 'Ari24grtf56', 'id_cliente'=>'']));
        }
        public static function actualizar_datos(){
            $cliente = new TablaUsuarios();
            echo json_encode($cliente->actualizar(['correo'=>'Christofer', 'pass'=>'ukfuyf1664', 'id_cliente'=>3]));
        }
        public static function eliminar_datos(){
            $cliente = new TablaUsuarios();
            echo json_encode($cliente->eliminar(['id_cliente'=>5]));
        }
    }


?>  