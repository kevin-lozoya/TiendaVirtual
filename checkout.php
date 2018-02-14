<?php
include_once('models/db.php');
include_once('modules/carrito.php');

session_start();

if (!isset($_SESSION['usuario'])) {
  header('Location: acceder.php');
}

if ($carrito->cantidad() == 0) {
  header('Location: carrito.php');
}

$hacerPedido = true;
$productos = $carrito->listarProductos();

foreach ($productos as $key => $producto) {
  $prod = $db->Producto->buscarPorId($producto['id']);
  if (intval($producto['cantidad']) > intval($prod['stock'])) {
    $hacerPedido = false;
    break;
  }
}

if ($hacerPedido && $pedido = $db->Pedido->insertarPedido($_SESSION['usuario']['id'], date("Y-m-d"))) {
  foreach ($productos as $key => $producto) {
    $db->Compra->insertarCompra($pedido['id'], $producto['id'], $producto['cantidad']);
    $db->Producto->restarStock($producto['id'], $producto['cantidad']);
  }
  $carrito->vaciar();
}

header('Location: carrito.php');
?>