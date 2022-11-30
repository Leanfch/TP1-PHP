<?php

$seccion = $_GET['sec'] ?? "home";
// $categoriaSelec = $_GET['cat'] ?? FALSE; No me funciona :/

$vistas_usuario = [
  "home" => [
    "titulo" => "LEFETECH"
  ],
  "catalogo" => [
    "titulo" => "Catálogo de productos"
  ],
  "contacto" => [
    "titulo" => "Contacto"
  ],
  "producto" => [
    "titulo" => "Detalle de producto"
  ],
  "nvidia" => [
    "titulo" => "Productos Nvidia GeForce"
  ],
  "amd" => [
    "titulo" => "Productos AMD Radeon"
  ],
  "oka" => [
    "titulo" => "Gracias"
  ],
  "alumno" => [
    "titulo" => "Datos del Alumno"
  ]
];

require_once "classes/Placa.php";

if (!array_key_exists($seccion, $vistas_usuario)) {
  $vista = "404";
  $titulo = "404 - Página no encontrada";
} else {
  $vista = $seccion;
  $titulo = $vistas_usuario[$seccion]["titulo"];
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="shortcut icon" href="img/1lefetech-isologo.svg" type="image/x-icon">
  <title><?= $titulo ?></title>
</head>

<body class="d-flex flex-column min-vh-100">
  <nav class="navbar navbar-expand-lg fixed-top bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php?sec=home">
        <img src="img/1lefetech-isologo.svg" alt="Logo lefetech" width="30" height="24" class="d-inline-block align-text-top mt-1">
      </a>
      <a class="navbar-brand" href="index.php?sec=home">LEFETECH</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle a1 text-dark fw-bold mx-1" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" data-bs-toggle="dropdown" aria-expanded="false">
              PRODUCTOS
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item a2" href="index.php?sec=nvidia">Nvidia GeForce</a>
              <a class="dropdown-item a2" href="index.php?sec=amd">Amd Radeon</a>
              <hr>
              <a class="dropdown-item a2" href="index.php?sec=catalogo">Todos los productos</a>
            </div>
          <li class="nav-item">
            <a class="nav-link text-dark a1 fw-bold text-uppercase mx-1" href="index.php?sec=contacto">Envío</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark a1 fw-bold text-uppercase mx-1" href="index.php?sec=alumno">Datos alumno</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <main class="d-flex flex-column min-height-100">
    <?PHP

    require file_exists("views/$vista.php") ? "views/$vista.php" : "views/404.php";

    ?>
  </main>
  <footer class="bg-light d-flex text-dark mt-auto">
    <div class="container">
      <div class="row">
        <a href="index.php?sec=home" class="logo-footer fs-4 text col-md-12 col-lg-4 d-flex justify-content-center align-items-center mb-2 text-reset text-decoration-none">
          <img src="img/1lefetech-isologo.svg" alt="Logo LEFETECH" width="30" height="24" class="me-2">
          LEFETECH
        </a>
        <ul class="col-md-12 col-lg-4 list-unstyled text-center">
          <li>
            <a href="#" class="text-reset text-decoration-none mt-2 d-block">Términos y condiciones</a>
            <a href="#" class="text-reset text-decoration-none mt-2 d-block">Información</a>
            <a href="#" class="text-reset text-decoration-none mt-2 d-block">Política de privacidad</a>
          </li>
        </ul>
        <ul class="col-md-12 col-lg-3 list-unstyled">
          <li class="d-flex justify-content-between mt-4">
            <a href="#" class="text-reset text-decoration-none d-block"><img src="img/facebook.png" width="40" height="40" alt="Logo Facebook"></a>
            <a href="#" class="text-reset text-decoration-none d-block"><img src="img/twitter.png" width="40" height="40" alt="Logo Twitter"></a>
            <a href="#" class="text-reset text-decoration-none d-block"><img src="img/instagram.png" width="40" height="40" alt="Logo Instagram"></a>
          </li>
        </ul>
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>