<?php
$conexion = mysqli_connect("localhost: 33067", "root", "", "pokedex");
$id = '';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=+, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">
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
    <main class="container" style="height:500px;">
        <!--Form que guarda los datos del pokemon elegido y lo guarda en una varible para modificarlo en la bd-->
        <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            //echo "el valor es" . $id;
        }
        //$id = $_GET['id'];
        if (isset($_GET['numero'])) {
            $numero = $_GET['numero'];
            //echo "el valor es" . $numero;
        }
        // Verificar si se ha pasado un nombre a través de GET
        if (isset($_GET['nombre'])) {
            $nombre = $_GET['nombre'];
            //echo "el valor es" . $nombre;
        }
        $ultimoid = $id;


        ?>

        <h2 class="mt-4 fw-bold">Modififcar datos del pokemon</h2>
        <form class="formularioCambio" action="cambiar.php" method="post" enctype="multipart/form-data">
            <!--Select que pasa el id-->
            <select name="ultimoid">
                <option value="<?php echo $ultimoid; ?>">
                    <?php echo $ultimoid; ?>
                </option>
            </select>
            <br> <label for="num">Numero</label> <input type="text" placeholder="<?php echo $numero; ?>"
                name="nuevo_numero" id="num">
            <br> <label for="nom">Nombre</label> <input type="text" placeholder="<?php echo $nombre; ?>"
                name="nuevo_nombre" id="nom">
            <br> <label for="tipo">Tipo</label> <input type="file" name="tipo" id="tipo">
            <br> <label for="img">Imagen</label> <input type="file" name='imagen' id="img">
            <br> <input type="submit" value="Actualizar" id="env" name="enviar">
            <a href="index-logueado.php" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">ME
                ARREPENTÍ</a>
        </form>
        <?php


        if (isset($_POST['ultimoid'])) {
            $ultimoid = $_POST['ultimoid'];
        }
        //recibir los datos del poke y imprimirlos de placeholder para mostrarlos
        //despues al modificar redirigir al index-logueado
        if (isset($_POST['nuevo_numero'])) {
            $nuevo_numero = $_POST['nuevo_numero'];
        }
        if (isset($_POST['nuevo_nombre'])) {
            $nuevo_nombre = $_POST['nuevo_nombre'];
        }

        //Si estan con datos los input actualiza los campos respectivos
        if (isset($_POST['nuevo_numero']) || isset($_POST['nuevo_nombre']) || isset($_POST['imagen']) || isset($_POST['tipo'])) {

            $cambio = "UPDATE pokemon SET Numero = '$nuevo_numero' WHERE id =" . $ultimoid;
            echo "Consulta SQL: " . $cambio;
            $conexion->query($cambio);

            //UPDATE pokemon SET Nombre = "POKOCHO" WHERE id = 25;
            $cambio = "UPDATE pokemon SET Nombre = '$nuevo_nombre' WHERE id = '$ultimoid'";
            //echo "Consulta SQL: " . $cambio;
            $conexion->query($cambio);
            $rutaImagenTipo = '';
            $rutaPokeTipo = '';

            //Envio de imagen del pokemon
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["imagen"])) {
                $nombreArchivo = $_FILES["imagen"]["name"];
                $tipoArchivo = $_FILES["imagen"]["type"];
                $tamanoArchivo = $_FILES["imagen"]["size"];
                $rutaTemporal = $_FILES["imagen"]["tmp_name"];

                $directorioDestino = "bd/foto/" . $nombreArchivo;
                if (move_uploaded_file($rutaTemporal, $directorioDestino)) {
                    $sql = "UPDATE Pokemon SET Imagen = '$directorioDestino' WHERE ID = $ultimoid";
                    if ($conexion->query($sql) === TRUE) {
                        echo "Imagen subida y ruta actualizada en la base de datos con éxito.";
                    } else {
                        echo "Error al actualizar la ruta en la base de datos: " . $conexion->error;
                    }
                }
            }
            //Envio de imagen del tipo
            if ($_FILES["tipo"]["size"] > 0) {
                $nombreArchivoTipo = $_FILES["tipo"]["name"];
                $rutaTemporalTipo = $_FILES["tipo"]["tmp_name"];
                $directorioDestinoTipo = "bd/tipos/" . $nombreArchivoTipo;

                if (move_uploaded_file($rutaTemporalTipo, $directorioDestinoTipo)) {
                    $sql = "UPDATE Pokemon SET Tipo = '$directorioDestinoTipo' WHERE ID = $ultimoid";
                    if ($conexion->query($sql) === TRUE) {
                        echo "Imagen del tipo subida y ruta actualizada en la base de datos con éxito.";
                    }
                }
            }

            //Despues de la query redirige al index-logueado
            header("Location: index-logueado.php");
            exit;
        }



        ?>
    </main>
    <footer> Celena Moscovich - Axel Leguero - Micaela Zara - Ludmila Pereyra</footer>

    <!-- BOOSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>