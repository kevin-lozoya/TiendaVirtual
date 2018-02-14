<?php
include_once('lib/funciones.php');
include_once('models/db.php');
include_once('modules/carrito.php');

session_start();

if (isset($_COOKIE["usuario"])) {
    include_once('models/db.php');
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

$plantilla = smarty();

$plantilla->assign('cantidadCarrito', $carrito->cantidad());
$plantilla->assign('precioCarrito', $carrito->precioTotal());
$plantilla->assign('categorias', $db->Categoria->todos());
$plantilla->assign('usuario', $_SESSION['usuario']);
$plantilla->assign('productos', $db->Producto->todos());

$plantilla->display('adminproductos.tpl');
?>