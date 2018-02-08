<?php
include_once('lib/funciones.php');
include_once('models/pedido.php');
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

if (!isset($_SESSION['usuario'])) {
  header('Location: index.php');
  exit;
}

// Si el usuario no pertenece al grupo 'administrador'
if ($_SESSION['usuario']['id_grupo'] !== '1') {
  header('Location: usuario.php');
  exit;
}

$plantilla = smarty();

$plantilla->assign('cantidadCarrito', $carrito->cantidad());
$plantilla->assign('precioCarrito', $carrito->precioTotal());
$plantilla->assign('usuario', $_SESSION['usuario']);
$plantilla->assign('pedidos', $conPedido->todos());
$plantilla->display('adminpedidos.tpl');
?>