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

if (!isset($_SESSION['usuario'])) {
  header('Location: index.php');
}

// Si el usuario no pertenece al grupo 'administrador'
if ($_SESSION['usuario']['id_grupo'] !== '1') {
  header('Location: usuario.php');
}

$pedidos = $db->Pedido->todos();

foreach ($pedidos as $key => $pedido) {
  $pedidos[$key]['productos'] = $db->Compra->buscarPorPedido($pedido['id']);
}

$plantilla = smarty();

$plantilla->assign('cantidadCarrito', $carrito->cantidad());
$plantilla->assign('precioCarrito', $carrito->precioTotal());
$plantilla->assign('usuario', $_SESSION['usuario']);
$plantilla->assign('pedidos', $pedidos);

$plantilla->display('adminpedidos.tpl');
?>