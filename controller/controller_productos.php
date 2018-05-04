<?php
require_once("db/Conexion.php");
require_once("models/model_productos.php");




$producto = new Producto;
$producto->mostrar_producto();
?>