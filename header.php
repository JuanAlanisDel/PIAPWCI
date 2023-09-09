<?php
session_start();
?>
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
        <a class="navbar-brand" href="index.php"><b>Present</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
            <ul class="navbar-nav m-auto">
                <li class="nav-item m-auto">
                    <a class="nav-link" href="index.php"><b>Home</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="productos.php">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="lista.php">Listas</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="carritocompras.php">Carrito</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="">Consultas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="perfil.php">Dummy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="landing.php">Logout</a>
                </li>
            </ul>
        </div>
     </div>
     <!------------------------------------------------------------------------------------->

<!--Busqueda y carrito de compras-->
<form class="form-inline my-2 my-lg-0">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Buscar">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-secondary btn-number">
                            <i class="bi bi-search">Buscar</i>
                        </button>
                    </div>
                </div>
                <a class="btn btn-success btn-sm ml-3" href="carritocompras.php">
                    <i class="bi bi-minecart"></i> Carrito
                    <span class="badge badge-light">3</span>
                </a>
            </form>
        </div>
    </div>
</nav>
</header>
<!------------------------------------------------------------------------------------->
</nav>

</head>
<body>
    <div class="container" id="contenido">
    <br/>