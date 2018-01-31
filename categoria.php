<?php
include_once('lib/funciones.php');
include_once('models/categoria.php');
include_once('models/producto.php');

session_start();

$plantilla = smarty();

if (isset($_GET['id']) && !empty($_GET['id'])) {
  $categoria = $conCategoria->buscarPorId($_GET['id']);
  if (!$categoria) {
    $plantilla->display('errorcategoria.tpl');
    exit;
  }
  $plantilla->assign('categoria', $categoria);
  $plantilla->assign('productos', $conProducto->buscarPorCategoria($_GET['id'])); 
}
else {
  $plantilla->display('errorcategoria.tpl');
  exit;
}

$plantilla->display('categoria.tpl');
?>