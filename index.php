<?php
//ARRANCA SESIÓN\(￣︶￣*\))
session_start();
$error = "";
// si esta apretado el boton d enviar
if (isset($_POST["enviar"])) {


    if ($_POST["user"] == "mica" && $_POST["pw"] == 123) {

        $_SESSION["user"] = $_POST["user"];
        //mica-axel-ludmi-cele--MALC *^____^*
        //CREO LA COOKIE
        setcookie("malc", "poke", time() + 1600);
        // lo q hace lo redirige a otra pag. --no lo ve el user
        header("location: index-logueado.php");
        exit();
    } else {
        $error = "user o clave erroneos";
        session_destroy();
    }
}

?>
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

                <!-- INPUTS - BARRITA LOGGIN -->
                <form action="index.php" method="post">
                    <div class="input-group ">
                        <input type="text" placeholder="Ingrese su usuario ^_^" class="ms-2 " name="user">
                        <input type="password" placeholder="Ingrese su contraseña :P" class="ms-2"name="pw">
                        <input type="submit" value="GOTTCHA!" class="ms-2" name="enviar">
                    </div>
                </form>
                <!-- SI LA SESIÓN FALLA POR ALGUNA RAZÓN -->
                <?php
                echo $error;
                ?>
            </div>
        </nav>

    </header>
    <main class="container">
        <!-- BUSCADOR -->
        <div class="mt-3">
            <form class="d-flex" role="search" method="POST" action="index.php">
                <input class="form-control me-2" type="search" placeholder="Ingrese el nombre, tipo o número de Pókemon" aria-label="Search" name="busqueda">
                <button class="btn btn-outline-success" type="submit">¿Quién es ese Pókemon?</button>
               
            </form>
        </div>
        
        <?php
            include_once('consultas.php');
            //mostrarTablaPokedex($conexion);
            
        ?>
  
    </main>
    <footer></footer>

    <!-- BOOSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>