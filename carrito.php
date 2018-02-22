<?php
include_once('lib/funciones.php');
include_once('models/db.php');
include_once('modules/carrito.php');

session_start();

if (isset($_COOKIE["usuario"]) && !isset($_SESSION['usuario'])) {
    $usuario = $db->Usuario->buscarPorId($_COOKIE["usuario"]);
  if ($usuario !== false) {
    $_SESSION['usuario'] = $usuario;
  }
}

$plantilla = smarty();

$plantilla->assign('cantidadCarrito', $carrito->cantidad());
$plantilla->assign('precioCarrito', $carrito->precioTotal());
$plantilla->assign('usuario', isset($_SESSION['usuario']));
$plantilla->assign('productos', $carrito->listarProductos());

$plantilla->display('carrito.tpl');
?>