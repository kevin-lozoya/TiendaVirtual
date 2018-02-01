<?php
include_once('conexion.php');

class Usuario {
  private $conn;

  public function __construct($conexion) {
    $this->conn = $conexion;
  }

  public function buscarPorId($id) {
    $sql = "SELECT id, id_grupo, nick, email, password, fullname, direccion, ciudad, provincia, cp
            FROM usuario
            WHERE id = $id";
    
    $result = $this->conn->query($sql);

    $usuario = false;

    if ($result->num_rows > 0) {
      $fila = $result->fetch_assoc();
      $usuario = $fila;
    }

    return $usuario;
  }

  public function buscarPorEmailPassword($email, $password) {
    $sql = "SELECT id, id_grupo, nick, email, password, fullname, direccion, ciudad, provincia, cp
              FROM usuario
             WHERE email = '$email'
               AND password = '$password'";
    
    $result = $this->conn->query($sql);

    $usuario = false;

    if ($result->num_rows > 0) {
      $fila = $result->fetch_assoc();
      $usuario = $fila;
    }

    return $usuario;
  }

  public function cambiarDireccionUsuario($id, $fullname, $direccion, $ciudad, $provincia, $cp) {
    $sql = "UPDATE usuario
               SET fullname = '$fullname',
                   direccion = '$direccion',
                   ciudad = '$ciudad',
                   provincia = '$provincia',
                   cp = '$cp'
             WHERE id = $id";

    $resultado = false;

    if ($this->conn->query($sql) === TRUE) {
        $resultado = true;
    }

    return $resultado;

  }

  public function todos() {
    $sql = "SELECT id, id_grupo, nick, email, password, fullname, direccion, ciudad, provincia, cp
            FROM usuario";

    $result = $this->conn->query($sql);

    $usuarios = array();

    if ($result->num_rows > 0) {
      while ($fila = $result->fetch_assoc()) {
        $usuarios[] = $fila;
      }
    }

    return $usuarios;
  }
}

$conUsuario = new Usuario($conn);
?>