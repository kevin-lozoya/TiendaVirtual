<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/modules/carrito.php');

session_start();

if (isset($_POST['id']) && isset($_POST['cantidad'])) {
  if (!empty($_POST['id']) && $_POST['cantidad'] > 0) {
    if (!$carrito->existeProducto($_POST['id'])){
      $carrito->anyadirProducto($_POST['id'], $_POST['cantidad']);
    }
    else {
      $carrito->actualizarCantidadProducto($_POST['id'], $_POST['cantidad']);
    }
  }
}

header('Location: /carrito.php');
?>