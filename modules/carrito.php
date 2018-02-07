<?php
class Carrito {
  private $producto;

  public function __construct($connProducto) {
    $this->producto = $connProducto;
  }

  public function cantidadProducto() {
    $cantidad = 0;
    if (isset($_SESSION['carrito'])) {
      $cantidad = count($_SESSION['carrito']);
    }
    return $cantidad;
  }

  public function existeProducto($id) {
    $existe = false;

    if (isset($_SESSION['carrito'])) {
      foreach ($_SESSION['carrito'] as $key => $value) {
        if ($value['id'] == $id) {
          $existe = true;
          break;
        }
      }
    }

    return $existe;
  }

  public function actualizarCantidadProducto($id, $cantidad) {
    if (isset($_SESSION['carrito'])) {
      foreach ($_SESSION['carrito'] as $key => $value) {
        if ($value['id'] === $id) {
          $_SESSION['carrito'][$key]['cantidad'] = $cantidad;
          break;
        }
      }
    }
  }

  public function anyadirProducto($id, $cantidad) {
    $producto = $this->producto->buscarPorId($id);
    $producto['cantidad'] = $cantidad;
    $_SESSION['carrito'][] = $producto;
    
  }

  public function quitarProducto($id) {
    if (isset($_SESSION['carrito'])) {
      foreach ($_SESSION['carrito'] as $key => $value) {
        if ($value['id'] == $id) {
          unset($_SESSION['carrito'][$key]);
          break;
        }
      }
    }
  }

  public function listarProductos() {
    $productos = array();
    
    if (isset($_SESSION['carrito'])) {
      $productos = $_SESSION['carrito'];
    }

    return $productos;
  }

  public function precioTotal() {
    $total = 0;

    if (isset($_SESSION['carrito'])) {  
      foreach ($_SESSION['carrito'] as $key => $value) {
        $total += floatval($value['precio']) * intval($value['cantidad']);
      }
    }

    return $total;
  }

  public function vaciar() {
    if (isset($_SESSION['carrito'])) {
      $_SESSION['carrito'] = array();
    }
  }
}
?>