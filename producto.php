<?php
include_once('lib/funciones.php');
include_once('models/db.php');
include_once('modules/carrito.php');

session_start();

if (isset($_COOKIE["usuario"])) {
    $usuario = $db->Usuario->buscarPorId($_COOKIE["usuario"]);
  if ($usuario !== false) {
    $_SESSION['usuario'] = $usuario;
  }
}

$plantilla = smarty();

if (isset($_GET['id']) && !empty($_GET['id'])) {
  $producto = $db->Producto->buscarPorId($_GET['id']);
  if ($producto === false) {
    $plantilla->assign('mensaje', 'No existe el producto');
    $plantilla->display('error.tpl');
    exit;
  }
  $plantilla->assign('producto', $producto);

}
else {
  $plantilla->assign('mensaje', 'No existe el producto');
  $plantilla->display('error.tpl');
  exit;
}

$plantilla->assign('cantidadCarrito', $carrito->cantidad());
$plantilla->assign('precioCarrito', $carrito->precioTotal());
$plantilla->assign('usuario', isset($_SESSION['usuario']));
$plantilla->display('producto.tpl');
?>