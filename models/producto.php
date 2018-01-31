<?php
include_once('conexion.php');

class Producto {
  private $conn;

  public function __construct($conexion) {
    $this->conn = $conexion;
  }

  public function buscarPorId($id) {
    $sql = "SELECT id, nombre, precio, stock, imagen, categoria
            FROM producto
            WHERE id = $id";
    
    $result = $this->conn->query($sql);

    $producto = false;

    if ($result->num_rows > 0) {
      $fila = $result->fetch_array();
      $producto = array(
        'id' => $fila[0],
        'nombre' => utf8_encode($fila[1]),
        'precio' => $fila[2],
        'stock' => $fila[3],
        'imagen' => $fila[4],
        'idCategoria' => $fila[5]
      );
    }

    return $producto;
  }

  public function todos() {
    $sql = "SELECT id, nombre, precio, stock, imagen, categoria
            FROM producto";

    $result = $this->conn->query($sql);

    $productos = array();

    if ($result->num_rows > 0) {
      while ($fila = $result->fetch_array()) {
        $productos[] = array(
          'id' => $fila[0],
          'nombre' => utf8_encode($fila[1]),
          'precio' => $fila[2],
          'stock' => $fila[3],
          'imagen' => $fila[4],
          'idCategoria' => $fila[5]
        );  
      }
    }

    return $productos;
  }
}

$conProducto = new Producto($conn);
?>