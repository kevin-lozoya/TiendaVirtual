<?php
include_once('lib/funciones.php');
include_once('models/producto.php');
include_once('modules/carrito.php');

$carrito = new Carrito($conProducto);

session_start();

if (isset($_COOKIE["usuario"])) {
    include_once('models/usuario.php');
    $usuario = $conUsuario->buscarPorId($_COOKIE["usuario"]);
  if ($usuario !== false) {
    $_SESSION['usuario'] = $usuario;
  }
}

$plantilla = smarty();

$plantilla->assign('cantidadCarrito', $carrito->cantidad());
$plantilla->assign('precioCarrito', $carrito->precioTotal());
$plantilla->assign('usuario', isset($_SESSION['usuario']));
$plantilla->assign('productos', $conProducto->todos());

$plantilla->display('index.tpl');
?>