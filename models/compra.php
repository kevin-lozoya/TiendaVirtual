<?php
class Compra {
  private $conn;

  public function __construct($conexion) {
    $this->conn = $conexion;
  }

  public function buscarPorPedido($id) {
    $sql = "SELECT c.id, id_pedido, id_producto, cantidad,
                  p.nombre as nombre_producto
            FROM compra c, producto p
            WHERE c.id_producto = p.id
              AND c.id_pedido = $id";

    $result = $this->conn->query($sql);

    $productos = array();

    if ($result->num_rows > 0) {
      while ($fila = $result->fetch_assoc()) {
        $productos[] = $fila;
      }
    }

    return $productos;
  }

  public function insertarCompra($id_pedido, $id_producto, $cantidad) {
    $sql = "INSERT INTO `compra` (`id`, `id_pedido`, `id_producto`, `cantidad`)
              VALUES (NULL, $id_pedido, $id_producto, $cantidad)";

    $resultado = false;

    if ($this->conn->query($sql) === true) {
      $resultado = true;
    }

    return $resultado;
  }
}
?>