<?php

include_once('conexion.php');

class Categoria {
  private $conn;

  public function __construct($conexion) {
    $this->conn = $conexion;
  }

  public function buscarPorId($id) {
    $sql = "SELECT id, nombre
            FROM categoria
            WHERE id = $id";

    $result = $this->conn->query($sql);

    $categoria = false;

    if ($result->num_rows > 0) {
      $fila = $result->fetch_array();
      $categoria = array(
        'id' => $fila[0],
        'nombre' => utf8_encode($fila[1])
      );
    }

    return $categoria;
  }

  public function todos() {
    $sql = "SELECT id, nombre
            FROM categoria";

    $result = $this->conn->query($sql);

    $categorias = array();

    if ($result->num_rows > 0) {
      while ($fila = $result->fetch_array()) {
        $categorias[] = array(
          'id' => $fila[0],
          'nombre' => utf8_encode($fila[1])
        );  
      }
    }

    return $categorias;
  }
}

$conCategoria = new Categoria($conn);
?>