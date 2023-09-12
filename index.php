<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=+, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Pokedex-inicio</title>
</head>

<body>
    <header>
        <!-- LOGO Y TÍTULO -->
        <nav class="navbar color-verde" >
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="./images/logo.png" alt="Logo" width="30" height="24" class=" d-inline-block align-text-top">
                    Pokédex
                </a>
                <!-- INPUTS - BARRITA LOGGIN -->
                <form action="." method="post">
                    <div class="input-group ">
                    <input type="text" placeholder="Ingrese su usuario ^_^" class="ms-2 ">
                    <input type="password" placeholder="Ingrese su contraseña :P" class="ms-2">
                    <input type="submit" value="GOTTCHA!" class="ms-2">
                    </div>
                </form>
            </div>
        </nav>

    </header>
    <main class="container">
        <!-- BUSCADOR -->
        <div class="mt-3">
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Ingrese el nombre,tipo o número de Pókemon" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">¿Quién es ese Pókemon?</button>
        </form>
        </div>
        <!-- GRILLA DE POKE-INFO -->
        <div class="container text-center mt-3">
            <div class="row">
                <div class="col">
                    Column
                </div>
                <div class="col">
                    Column
                </div>
                <div class="col">
                    Column
                </div>
            </div>
        </div>
    </main>
    <footer></footer>

    <!-- BOOSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>