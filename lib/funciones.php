<?php
function smarty(){
    require_once("smarty/Smarty.class.php");
    $plantilla = new Smarty();
    return $plantilla;
}

// Funcionamiento de postparamsExists
// $keysPost = array(
// 	'a' => 'idApp',
// 	't' => 'tokenDisp',
// 	'e' => 'empresa',
// 	'so' => 'sistemaOperativo',
// 	'desReg' => 'borrarRegistro'
// );
function postParamsExists($keysPost) {
  $valido = true;
  
  $params = array();

  foreach ($keysPost as $keyPost => $keyParams) {
    if (!isset($_POST[$keyPost])){
      $valido = false;
      break;
    }
    
    $params[$keyParams] = $_POST[$keyPost];
  }

  if (!$valido) {
    apiError('No se pudo procesar la petición', false);
    http_response_code(422);
    return null;
  }

  return $params;
}


?>
