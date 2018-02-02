<?php
include_once('models/producto.php');

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

if (isset($_POST['id']) && !empty($_POST['id'])) {
  $conProducto->borrarProducto($_POST['id']);
}

header('Location: adminproductos.php');
?>