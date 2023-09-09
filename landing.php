<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiendita Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="css/general.css" rel="stylesheet">
<!--Barra de Navegación-->
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
    <img src="img/shop.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
        <a class="navbar-brand" href="index.php">Present</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
            <ul class="navbar-nav justify-end">
                <li class="nav-item m-auto">
                    <a class="nav-link" href="login.php"><b>Ingresar</b></a>
                </li>
            </ul>
        </div>
     </div>
<!------------------------------------------------------------------------------------->
</nav>

</head>
<body id="">
    <div class="container" id="landing">
    <br/>
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button id="slide" type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button id="slide" type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button id="slide" type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="img/slide1.jpg" id="landing" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h2 id="carousel">Bienvenido al ahora</h2>
        <p id="carousel">Objetos que buscas a un precio accesible</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="img/slide2.jpg" id="landing" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h2 id="carousel">Un lugar para todos</h2>
        <p id="carousel">Productos nuevos, usados o cotizados</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/slide3.jpg" id="landing" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h2 id="carousel"><b>¿Qué estás esperando?</b></h2>
        <p id="carousel">Ingresa para poder tener todos los beneficios</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<?php include("footer.php");?>