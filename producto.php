<?php
include_once('lib/funciones.php');
include_once('models/producto.php');

$plantilla = smarty();

if (isset($_GET['id']) && !empty($_GET['id'])) {
  $producto = $conProducto->buscarPorId($_GET['id']);
  if ($producto === false) {
    $plantilla->display('errorproducto.tpl');
    exit;
  }
  $plantilla->assign('producto', $producto);

}
else {
  $plantilla->display('errorproducto.tpl');
  exit;
}
$plantilla->display('producto.tpl');
?>