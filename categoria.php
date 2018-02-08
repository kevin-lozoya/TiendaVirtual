<?php
include_once('lib/funciones.php');
include_once('models/categoria.php');
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

if (isset($_GET['id']) && !empty($_GET['id'])) {
  $categoria = $conCategoria->buscarPorId($_GET['id']);
  if (!$categoria) {
    $plantilla->assign('mensaje', 'No existe la categoría');
    $plantilla->display('error.tpl');
    exit;
  }
  $plantilla->assign('categoria', $categoria);
  $plantilla->assign('productos', $conProducto->buscarPorCategoria($_GET['id'])); 
}
else {
  $plantilla->assign('mensaje', 'No existe la categoría');
  $plantilla->display('error.tpl');
  exit;
}

$plantilla->assign('cantidadCarrito', $carrito->cantidad());
$plantilla->assign('precioCarrito', $carrito->precioTotal());
$plantilla->assign('usuario', isset($_SESSION['usuario']));
$plantilla->display('categoria.tpl');
?>