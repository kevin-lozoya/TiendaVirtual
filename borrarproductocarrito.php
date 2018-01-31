<?php
include_once('models/producto.php');
include_once('modules/carrito.php');

session_start();

$carrito = new Carrito($conProducto);

if (isset($_POST['id']) && !empty($_POST['id'])) {
  $carrito->quitarProducto($_POST['id']);
}

header('Location: carrito.php');
exit;
?>