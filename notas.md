generar vista con controladores
cambiar la url 
ajustes de la url, compeser


para Router 
´´´php
 if ($metodo_envio_datos === 'GET' && array_key_exists($metodo_envio_datos, $this->directorio)) {
            $mi_vista = $this->directorio[$metodo_envio_datos];
´´´
verifica si el método HTTP actual es "GET" y si ese método HTTP existe como una clave en el arreglo de rutas ($this->directorio). Si ambas condiciones se cumplen, significa que se está accediendo a una ruta válida con el método GET, y el código continúa para cargar el controlador correspondiente.

//rutas y sus funciones