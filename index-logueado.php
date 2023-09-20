<?php

session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
    <title>Pokedex-inicio</title>
</head>

<body>
    <header>
        <!-- LOGO Y TÍTULO -->
        <nav class="navbar color-base">
            <div class="container-fluid">
                <a class="navbar-brand " href="index.php">
                    <img src="./images/logo.png" alt="Logo" width="36" height="30"
                        class=" d-inline-block align-text-top ">

                </a>
                <h4 class="logo">Pokedex:Gotta catch 'em all! </h4>


        </nav>

    </header>
    <main class="container">
        <h1 class="mt-4 fw-bold">Pókedex</h1>
        <!-- BUSCADOR -->
        <div class="mt-3">
            <?php
            if (isset($_SESSION["user"])) {
                echo "bienvenido cazador " . $_SESSION["user"] . " ¡atrápalos a todos!";
            } else {
                session_destroy();
                header("location: index.php");
                exit();
            }

            ?>
        </div>
        <div class="mt-3">
            <form class="d-flex" role="search" method="POST" action="index-logueado.php">
                <input name="busqueda" class="form-control me-2" type="search"
                    placeholder="Ingrese el nombre, tipo o número de Pókemon" aria-label="Search">
                <button class="btn btn-outline-warning" type="submit">¿Quién es ese Pókemon?</button>
            </form>

        </div>
        <!-- GRILLA DE POKE-INFO -->
        <div class="mt-3">
            <form action="agregar-poke.php" method="post">
                <button class="btn btn-outline-success" type="submit">Capturar Pokemon
                </button>
            </form>
        </div>
        <?php
        include_once("consultas.php");

        include_once('conexion-bd.php');

        ?>

    </main>
    <footer> Celena Moscovich - Axel Leguero - Micaela Zara - Ludmila Pereyra</footer>

    <!-- BOOSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>