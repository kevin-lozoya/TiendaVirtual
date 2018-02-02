<?php
include_once('models/pedido.php');

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

if (isset($_GET['id']) && !empty($_GET['id'])) {
  $conPedido->cambiarEstadoEnviado($_GET['id']);
}

header('Location: adminpedidos.php');
?>