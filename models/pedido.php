<?php
include_once('conexion.php');

class Pedido {
  private $conn;

  public function __construct($conexion) {
    $this->conn = $conexion;
  }

  public function buscarPorId($id) {
    $sql = "SELECT p.id as id, 
                   id_usuario, 
                   u.nick as nick_usuario, 
                   fecha, 
                   estado
            FROM pedido p, compra c, usuario u 
            WHERE p.id = c.id_pedido 
              AND c.id_usuario = u.id
              AND p.id = $id";

    $result = $this->conn->query($sql);

    $pedido = false;

    if ($result->num_rows > 0) {
      $fila = $result->fetch_assoc();
      $pedido = $fila;
    }

    return $pedido;
  }

  public function todos() {
    $sql = "SELECT p.id as id, id_usuario, u.nick as nick_usuario, fecha, estado
            FROM pedido p, usuario u 
            WHERE p.id_usuario = u.id
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

  public function insertarPedido($id_usuario, $fecha) {
    $sql = "INSERT INTO `pedido` (`id`, `id_usuario`, `fecha`)
              VALUES (NULL, $id_usuario, '$fecha')";

    $resultado = false;

    if ($this->conn->query($sql) === true) {
      $resultado = $this->idUltimoPedidoUsuario($id_usuario);
    }

    return $resultado;
  }

  public function idUltimoPedidoUsuario($id_usuario) {
    $sql = "SELECT id 
            FROM pedido
            WHERE id_usuario = $id_usuario
            ORDER BY id DESC
            LIMIT 1";
    
    $result = $this->conn->query($sql);

    $pedido = false;

    if ($result->num_rows > 0) {
      $fila = $result->fetch_assoc();
      $pedido = $fila;
    }

    return $pedido;
  }
}

$conPedido = new Pedido($conn);
?>