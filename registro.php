<?php
include_once('lib/funciones.php');

session_start();

if (isset($_SESSION['usuario'])) {
  header('Location: index.php');
  exit;
}

$plantilla = smarty();
$plantilla->display('registro.tpl');
?>