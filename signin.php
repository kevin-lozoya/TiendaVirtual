<?php
include_once('models/db.php');

session_start();

if (isset($_SESSION['usuario'])) {
  header('Location: index.php');
  exit;
}

if (isset($_POST['nick']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['passwordconfirm'])) {
  if (!empty($_POST['nick']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['passwordconfirm'])) {
    if ($_POST['password'] === $_POST['passwordconfirm']) {
      $resultado = $db->Usuario->insertarCliente($_POST['nick'], $_POST['email'], $_POST['password'], $_POST['fullname'], $_POST['direccion'], $_POST['ciudad'], $_POST['provincia'], $_POST['cp']);
      if ($resultado) {
        header('Location: index.php');
        exit;
      }
    }
  }
}

header('Location: registro.php');
?>