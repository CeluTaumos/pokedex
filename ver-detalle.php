<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=+, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
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
                    <img src="./images/logo.png" alt="Logo" width="36" height="30" class=" d-inline-block align-text-top ">

                </a>
                <h4 class="logo">Pokedex:Gotta catch 'em all! </h4>


        </nav>

    </header>
    <main class="container">
    <div class="mt-3">
            <form class="d-flex" role="search" method="POST" action="index-logueado.php">
                <input name="busqueda" class="form-control me-2" type="search" placeholder="Ingrese el nombre, tipo o número de Pókemon" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">¿Quién es ese Pókemon?</button>
            </form>
            
        </div>

<?php
include_once("conexion-bd.php");
//Como obtener el valor del id del input
if(isset($_POST['detalle'])){
    $numero = $_POST['detalle'];
    $res ="SELECT * FROM pokemon WHERE Numero LIKE " . $numero;
    $pokemon_detalle =  $conexion->query($res);

    while ($fila = $pokemon_detalle->fetch_assoc()) {

        echo "<section class='detalles' style='display: flex'> <img class='mobile' src='" . $fila["Imagen"] . "' alt='tipo' width=350 height=350>
        <div> <h1>#" . $fila["Numero"] . " " . $fila["Nombre"]."</h1>  <p>".$fila["Descripcion"]."</p> </div> </section>";
    }
}

?>
  <a id="volv" href="index-logueado.php" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">volver</a>
</main>
<footer> Celena Moscovich - Axel Leguero - Micaela Zara - Ludmila Pereyra</footer>

    <!-- BOOSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>