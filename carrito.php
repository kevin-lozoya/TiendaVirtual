<?php
include_once('lib/funciones.php');
session_start();

$plantilla = smarty();
$plantilla->display('carrito.tpl');
?>