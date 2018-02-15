<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/models/db.php');

session_start();

if (!isset($_SESSION['usuario'])) {
  header('Location: /index.php');
}

if (isset($_POST['fullname']) && isset($_POST['direccion']) && isset($_POST['ciudad']) && isset($_POST['provincia']) && isset($_POST['cp'])) {

  $resultado = $db->Usuario->cambiarDireccionUsuario($_SESSION['usuario']['id'], $_POST['fullname'], $_POST['direccion'], $_POST['ciudad'], $_POST['provincia'], $_POST['cp']);
  
  if ($resultado === true) {
    $_SESSION['usuario'] = $db->Usuario->buscarPorId($_SESSION['usuario']['id']);
  }
}

header('Location: /usuario.php');

?>