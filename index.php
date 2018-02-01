<?php
include_once('lib/funciones.php');
include_once('models/producto.php');

session_start();

$plantilla = smarty();

$plantilla->assign('productos', $conProducto->todos());

$plantilla->display('index.tpl');
?>