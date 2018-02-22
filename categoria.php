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

if (isset($_GET['id']) && !empty($_GET['id'])) {
  $categoria = $db->Categoria->buscarPorId($_GET['id']);
  if (!$categoria) {
    $plantilla->assign('mensaje', 'No existe la categoría');
    $plantilla->display('error.tpl');
    exit;
  }
  $plantilla->assign('categoria', $categoria);
  $plantilla->assign('productos', $db->Producto->buscarPorCategoria($_GET['id'])); 
}
else {
  $plantilla->assign('mensaje', 'No existe la categoría');
  $plantilla->display('error.tpl');
  exit;
}

$plantilla->display('categoria.tpl');
?>