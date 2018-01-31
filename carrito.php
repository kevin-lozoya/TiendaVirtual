<?php
include_once('lib/funciones.php');
include_once('models/producto.php');
include_once('modules/carrito.php');

session_start();

$carrito = new Carrito($conProducto);

$plantilla = smarty();

$plantilla->assign('productos', $carrito->listarProductos());
$plantilla->assign('precioTotal', $carrito->precioTotal());

$plantilla->display('carrito.tpl');
?>