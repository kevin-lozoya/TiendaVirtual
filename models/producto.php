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

  public function borrarProducto($id) {
    $sql = "DELETE FROM producto
            WHERE id = $id";
    
    $resultado = false;

    if ($this->conn->query($sql) === true) {
      $resultado = true;
    }

    return $resultado;
  }

  public function insertarProducto($nombre, $categoria, $stock, $precio, $imagen) {
    $sql = "INSERT INTO `producto` (`id`, `nombre`, `precio`, `stock`, `imagen`, `id_categoria`) 
              VALUES (NULL, '$nombre', '$precio', '$stock', '$imagen', '$categoria')";

    $resultado = false;
    if ($this->conn->query($sql) === true) {
      $resultado = true;
    }

    return $resultado;
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