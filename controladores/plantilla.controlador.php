<?php 

#creamos la clase de la cual sera instanciada en vistas/index.php
class ControladorPlantilla{
        #creamos el método publico 
        public function ctrlPlantilla(){

            #tarea a ejecutar el método, incluye la plantilla que se encuentra en vistas/plantilla.php
                include "vistas/plantilla.php";
        }
}

?>