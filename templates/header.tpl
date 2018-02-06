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
          <form class="py-3 px-3 d-lg-none busqueda-movil">
            <input class="form-control" type="search" placeholder="Buscar producto" aria-label="Search">
          </form>
          <ul class="navbar-nav d-lg-none">
            <li class="nav-item">
              <a class="nav-link" href="#">
                Inicio
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                Categorias
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <!-- Hacer que se busque en la base de datos -->
                <a class="dropdown-item" href="/categoria.php">Placas Base</a>
                <a class="dropdown-item" href="/categoria.php">Procesadores</a>
                <a class="dropdown-item" href="/categoria.php">Targetas Gráficas</a>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav ">
            <li class="nav-item">
              <a class="nav-link" href="/carrito.php">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                0 Producto(s) | 0€
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/acceder.php">
                <i class="fa fa-user" aria-hidden="true"></i>
                Acceder
              </a>
            </li>
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
          </ul>
          <form action="/buscar.php" method="get" class="form-inline d-none d-lg-inline">
            <input name="b" class="form-control mr-sm-2" type="search" placeholder="Buscar producto" />
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
          </form>

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
                <a class="dropdown-item" href="/categoria.php">Placas Base</a>
                <a class="dropdown-item" href="/categoria.php">Procesadores</a>
                <a class="dropdown-item" href="/categoria.php">Targetas Gráficas</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>