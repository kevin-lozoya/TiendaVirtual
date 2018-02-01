<?php
include_once('lib/funciones.php');

session_start();

if (isset($_SESSION['usuario'])) {
  header('Location: index.php');
}

$plantilla = smarty();

$plantilla->display('acceder.tpl');
?>