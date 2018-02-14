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

if (isset($_GET['id']) && !empty($_GET['id'])) {
  $db->Pedido->cambiarEstadoEnviado($_GET['id']);
}

header('Location: adminpedidos.php');
?>