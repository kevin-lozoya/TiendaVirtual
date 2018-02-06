<?php
  session_start();
  session_destroy();

  $name="usuario";
  $value = "0"; 
  $expires= time() - 3600; 
  $path="/";
  $domain="";
  $secure=false;
  $HttpOnly=true;

  setcookie ($name,$value,$expires,$path,$domain,$secure,$HttpOnly);

  header('Location: index.php');
?>