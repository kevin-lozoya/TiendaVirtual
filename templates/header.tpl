<!DOCTYPE html>
<html lang='es'>

<head>
  <meta charset="utf-8" />
  <title>Tienda DAW</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/app.css">
</head>

<body>
  <div id="navegacion">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a href="/">
          <img src="/img/logo.jpg" class="navbar-brand logo" />
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
          <ul class="navbar-nav d-lg-none">
            <li class="nav-item">
              <a class="nav-link" href="/">
                Inicio
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Categorias
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/categoria.php?id=1">Placas Base</a>
                <a class="dropdown-item" href="/categoria.php?id=2">Procesadores</a>
                <a class="dropdown-item" href="/categoria.php?id=3">Discos Duros</a>
                <a class="dropdown-item" href="/categoria.php?id=4">Tarjetas Gráficas</a>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav ">
            <li class="nav-item">
              <a class="nav-link" href="/carrito.php">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                {$cantidadCarrito} Producto(s) | {$precioCarrito}€
              </a>
            </li>
            {if !$usuario}
            <li class="nav-item">
              <a class="nav-link" href="/acceder.php">
                <i class="fa fa-user" aria-hidden="true"></i>
                Acceder
              </a>
            </li>
            {else}
            <li class="nav-item">
              <a class="nav-link" href="/usuario.php">
                <i class="fa fa-user" aria-hidden="true"></i>
                Mi Cuenta
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/logout.php">
                <i class="fa fa-user" aria-hidden="true"></i>
                Salir
              </a>
            </li>
            {/if}
          </ul>
        </div>
      </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-dark bg-tienda d-none d-lg-block">
      <div class="container">
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/">
                Inicio
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Categorias
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/categoria.php?id=1">Placas Base</a>
                <a class="dropdown-item" href="/categoria.php?id=2">Procesadores</a>
                <a class="dropdown-item" href="/categoria.php?id=3">Discos Duros</a>
                <a class="dropdown-item" href="/categoria.php?id=4">Tarjetas Gráficas</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>