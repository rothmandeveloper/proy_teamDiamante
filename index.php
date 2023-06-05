<?php
require_once "controladores/plantilla.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/categorias.controlador.php";
require_once "controladores/productos.controlador.php";
require_once "controladores/clientes.controlador.php";
require_once "controladores/ventas.controlador.php";

require_once "modelos/usuarios.modelo.php";
require_once "modelos/categorias.modelo.php";
require_once "modelos/productos.modelo.php";
require_once "modelos/clientes.modelo.php";
require_once "modelos/ventas.modelo.php";


#instaciamos o invocamos a clase para tener acceso lo que contenga que está en controlador 
$plantilla = new ControladorPlantilla();

#como ya invocamos podemos ejecutar metodos que tenta esa clase el plantilla.controlador.php se hace con la -> ejecutar
$plantilla -> ctrlPlantilla(); //este es un metodo creado en la clase en plantilla.controlador.php"


?>