<?php
include_once('models/db.php');

session_start();

if (!isset($_SESSION['usuario'])) {
  header('Location: index.php');
}

// Si el usuario no pertenece al grupo 'administrador'
if ($_SESSION['usuario']['id_grupo'] !== '1') {
  header('Location: usuario.php');
}

if (isset($_POST['nombre']) && isset($_POST['categoria']) && isset($_POST['stock']) && isset($_POST['precio']) && isset($_POST['imagen'])) {
  if (!empty($_POST['nombre']) && !empty($_POST['categoria']) && !empty($_POST['stock']) && !empty($_POST['precio']) && !empty($_POST['imagen'])) {
    $db->Producto->insertarProducto($_POST['nombre'], $_POST['categoria'], $_POST['stock'], $_POST['precio'], $_POST['imagen']);
  }
}

header('Location: adminproductos.php');
?>