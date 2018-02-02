<?php
include_once('lib/funciones.php');
include_once('models/producto.php');
include_once('models/categoria.php');

session_start();

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

$plantilla->assign('categorias', $conCategoria->todos());
$plantilla->assign('usuario', $_SESSION['usuario']);
$plantilla->assign('productos', $conProducto->todos());

$plantilla->display('adminproductos.tpl');
?>