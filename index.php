<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/logo.png">
  <title>Matias Uribe</title>

  <link rel="stylesheet" href="./css/bootstrap.css" />
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <img class="card-img-right" src="img/logo.png" alt="" height="50" href="perfil.php">
      <a class="navbar-brand" href="index.php">Blockbusm</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02"
        aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      </button>
      <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link " href="perfil.php">Perfil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="peliculas.php">Peliculas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link dropdown-toggle">TOPS</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="5mejores.php">Mejores 5 peliculas</a>
              <a class="dropdown-item" href="5peores.php">Peores 5 peliculas</a>
              <a class="dropdown-item" href="5mascomentadas.php">Las 5 peliculas más comentadas</a>
              <a class="dropdown-item" href="favoritasG.php">Favoritas para publico (G)</a>
              <a class="dropdown-item" href="favoritasPG.php">Favoritas para publico (PG)</a>
              <a class="dropdown-item" href="favoritasR.php">Favoritas para publico (R)</a>
              <a class="dropdown-item" href="pocostock.php">ULTIMAS UNIDADES</a>
          </li>
        </ul>
        <form class="d-flex" method="POST" ACTION="busqueda.php">
          <input class="form-control me-sm-2" type="text" placeholder="Buscar" name="buscar">
          <button class="btn btn-secondary my-2 my-sm-0" type="submit" name="accion">Buscar</button>
        </form>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link ">
              <?php echo $nombreUsuario ?>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link ">
              <?php echo $dinero; ?>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="cerrar.php">Cerrar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <br />
    <div class="row">

<div class="jumbotron">
    <h1 class="display-3">Bienvenidos a Blockbusm:
        <?php echo $nombreUsuario ?>
    </h1>
</div>
