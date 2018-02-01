<?php
include_once('conexion.php');

class Producto {
  private $conn;

  public function __construct($conexion) {
    $this->conn = $conexion;
  }

  public function buscarPorId($id) {
    $sql = "SELECT id, nombre, precio, stock, imagen, id_categoria
            FROM producto
            WHERE id = $id";
    
    $result = $this->conn->query($sql);

    $producto = false;

    if ($result->num_rows > 0) {
      $fila = $result->fetch_assoc();
      $producto = $fila;
    }

    return $producto;
  }

  public function buscarPorCategoria($idCategoria) {
    $sql = "SELECT id, nombre, precio, stock, imagen, id_categoria
            FROM producto
            WHERE categoria = $idCategoria";
    
    $result = $this->conn->query($sql);

    $productos = array();

    if ($result->num_rows > 0) {
      while ($fila = $result->fetch_assoc()) {
        $productos[] = $fila;
      }
    }

    return $productos;
  }

  public function todos() {
    $sql = "SELECT id, nombre, precio, stock, imagen, id_categoria
            FROM producto";

    $result = $this->conn->query($sql);

    $productos = array();

    if ($result->num_rows > 0) {
      while ($fila = $result->fetch_assoc()) {
        $productos[] = $fila;
      }
    }

    return $productos;
  }
}

$conProducto = new Producto($conn);
?>