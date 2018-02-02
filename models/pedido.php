<?php
include_once('conexion.php');

class Pedido {
  private $conn;

  public function __construct($conexion) {
    $this->conn = $conexion;
  }

  public function buscarPorId($id) {
    $sql = "SELECT id, fecha, estado
              FROM pedido
             WHERE id = $id";

    $result = $this->conn->query($sql);

    $pedido = false;

    if ($result->num_rows > 0) {
      $fila = $result->fetch_assoc();
      $pedido = $fila;
    }

    return $pedido;
  }

  public function todos() {
    $sql = "SELECT id, fecha, estado
              FROM pedido
              ORDER BY id DESC";

    $result = $this->conn->query($sql);

    $pedidos = array();

    if ($result->num_rows > 0) {
      while ($fila = $result->fetch_assoc()) {
        $pedidos[] = $fila;
      }
    }

    return $pedidos;
  }

  public function cambiarEstadoEnviado($id) {
    $sql = "UPDATE pedido
              SET estado = 'Enviado'
              WHERE id = $id";

    $resultado = false;

    if ($this->conn->query($sql) === TRUE) {
        $resultado = true;
    }

    return $resultado;

  }

  public function insertarPedido($fecha) {
    $sql = "INSERT INTO `pedido` (`id`, `fecha`)
              VALUES (NULL, '$fecha')";

    $resultado = false;

    if ($this->conn->query($sql) === true) {
      $resultado = true;
    }

    return $resultado;
  }
}

$conPedido = new Pedido($conn);
?>