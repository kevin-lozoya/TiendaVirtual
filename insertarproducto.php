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

if (isset($_POST['nombre']) && isset($_POST['categoria']) && isset($_POST['stock']) && isset($_POST['precio']) && isset($_POST['imagen'])) {
  if (!empty($_POST['nombre']) && !empty($_POST['categoria']) && !empty($_POST['stock']) && !empty($_POST['precio']) && !empty($_POST['imagen'])) {
    $conProducto->insertarProducto($_POST['nombre'], $_POST['categoria'], $_POST['stock'], $_POST['precio'], $_POST['imagen']);
  }
}

header('Location: adminproductos.php');
?>