<?php
include_once('../models/producto.php');
header('Content-type: application/json');

if (isset($_GET['id']) && !empty($_GET['id'])) {
  $json = json_encode($conProducto->buscarPorId($_GET['id']));
}
else {
  $json = json_encode($conProducto->todos());
}

print($json);

?>