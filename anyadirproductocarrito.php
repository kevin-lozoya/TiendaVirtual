<?php
include_once('models/producto.php');
include_once('modules/carrito.php');

session_start();

$carrito = new Carrito($conProducto);

if (isset($_POST['id']) && isset($_POST['cantidad'])) {
  if (!empty($_POST['id']) && $_POST['cantidad'] > 0) {
    $carrito->anyadirProducto($_POST['id'], $_POST['cantidad']);
  }
}

header('Location: carrito.php');
exit;
?>