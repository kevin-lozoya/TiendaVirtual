<?php
include_once('lib/funciones.php');
include_once('models/producto.php');

$plantilla = smarty();

$plantilla->assign('productos', $conProducto->todos());

$plantilla->display('index.tpl');
?>