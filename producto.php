<?php
include_once('lib/funciones.php');
include_once('models/producto.php');

$plantilla = smarty();

if (isset($_GET['id']) && !empty($_GET['id'])) {
  $producto = $conProducto->buscarPorId($_GET['id']);
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
$plantilla->display('producto.tpl');
?>