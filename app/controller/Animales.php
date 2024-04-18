<?php 

    namespace controller;
    use model\TablaAnimales;

    require_once realpath(".../../vendor/autoload.php");
    
    class Animales{
        public static function obtener_datos(){
            $animal = new TablaAnimales();
            echo json_encode($animal->consulta());
        }

        public static function insercion_datos(){
            $animal = new TablaAnimales();
            echo json_encode($animal->insercion([ 'nombre'=>'Tiburon blanco','especie'=>'carcharias', 'habitat'=>'Mar','id_animal'=>'']));
        }
        public static function actualizar_datos(){ 
            $animal = new TablaAnimales();
            echo json_encode($animal->actualizar(['nombre'=>'Ballena', 'id_animal'=>1]));
        }
        public static function eliminar_dato(){ 
            $animal = new TablaAnimales();
            echo json_encode($animal->eliminar(['id_animal'=>1]));
        }
    }

?>