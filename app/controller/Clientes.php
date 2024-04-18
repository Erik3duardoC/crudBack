<?php

    namespace controller;
    use model\TablaClientes;
    
    require_once realpath(".../../vendor/autoload.php");

    class Clientes{
        public static function obtener_datos(){
            $cliente = new TablaClientes(); 
            echo json_encode($cliente->consulta());
        }
        public static function insertar_datos(){
            $cliente = new TablaClientes();
            echo json_encode($cliente->insercion(['nombre'=>'abel', 'apellidoMaterno'=>'cruz', 'apellidoPaterno'=>'Martinez', 'edad'=>44, 'sexo'=>'Masculino', 'id_cliente'=>'']));
        }
        public static function actualizar_datos(){
            $cliente = new TablaClientes();
            echo json_encode($cliente->actualizar(['nombre'=>'alan', 'apellidoMaterno'=>'juarez', 'id_cliente'=>2]));
        }
        public static function eliminar_datos(){
            $cliente = new TablaClientes();
            echo json_encode($cliente->eliminar(['id_cliente'=>2]));
        }
    }

?>  