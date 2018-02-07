<?php
include_once('models/producto.php');
include_once('modules/carrito.php');
include_once('models/pedido.php');

session_start();

$carrito = new Carrito($conProducto);

if (!isset($_SESSION['usuario'])) {
  header('Location: index.php');
  exit;
}

if ($carrito->cantidadProducto() == 0) {
  header('Location: carrito.php');
  exit;
}

if ($conPedido->insertarPedido(date("Y-m-d"))) {
  $carrito->vaciar();
}

header('Location: carrito.php');
?>