<?php
include_once('models/db.php');

session_start();

if (isset($_POST['email']) && isset($_POST['password'])) {
  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $usuario = $db->Usuario->buscarPorEmailPassword($_POST['email'], $_POST['password']);
    if ($usuario === false) {
      header('Location: acceder.php');
    }

    $_SESSION['usuario'] = $usuario;

    if ($_POST['recuerdame']) {
      $name="usuario";
      $value=$usuario['id']; 
      $expires=time()+60*60*24*30; 
      $path="/";
      $domain="";
      $secure=false;
      $HttpOnly=true;
      setcookie ($name,$value,$expires,$path,$domain,$secure,$HttpOnly);
    }
    
    header('Location: index.php');
  }
}

header('Location: acceder.php');
?>