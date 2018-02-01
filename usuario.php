<?php
include_once('lib/funciones.php');

session_start();

if (!$_SESSION['usuario']) {
  header('Location: index.php');
}

$plantilla = smarty();

$plantilla->assign('usuario', $_SESSION['usuario']);
$plantilla->display('usuario.tpl');
?>