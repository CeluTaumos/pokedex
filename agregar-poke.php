<?php
$conexion = mysqli_connect("localhost: 33067", "root", "", "pokedex");
$id = '';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
    <title>Pokedex-agregar</title>
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
        <h2 class="mt-4 fw-bold">Agregar un nuevo Pokemon</h2>
        <form action="agregar-poke.php" method="post" enctype="multipart/form-data">
            <!--Select que pasa el id-->

            <input type="text" placeholder="PokeNumero" name="nuevo_numero" class="mb-3">
            <input type="text" placeholder="PokeNombre" name="nuevo_nombre" class="mb-3">
            <select name="tipo" id="tipo">
                <option value="bd/tipos/fuego.png">fuego</option>
                <option value="bd/tipos/agua.png">agua</option>
                <option value="bd/tipos/electrico.png">electrico</option>
                <option value="bd/tipos/normal.png">normal</option>
                <option value="bd/tipos/roca.png">rocas</option>
                <option value="bd/tipos/bicho.png">bicho</option>
                <option value="bd/tipos/psiquico.png">psiquico</option>
                <option value="bd/tipos/veneno.png">veneno</option>
                <option value="bd/tipos/volador.png">volador</option>
                <option value="bd/tipos/fantasma.png">fantasma</option>
                <option value="bd/tipos/planta.png">planta</option>

            </select>
            <p>Fotito del Pokemon : <input type="file" name='imagen'></p>
            <input type="submit" value="Enviar" name="enviar" class="btn btn-warning">
            <button class="btn btn-warning "><a href="index-logueado.php" class="link-offset-2 link-underline link-underline-opacity-0">ME ARREPENTÍ</a></button>
        </form>
    </main>

    <!-- BOOSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>

<?php
if (isset($_POST['nuevo_numero'])) {
    $nuevo_numero = $_POST['nuevo_numero'];
}
if (isset($_POST['nuevo_nombre'])) {
    $nuevo_nombre = $_POST['nuevo_nombre'];
}

//Si estan con datos los input sube los campos respectivos
if (isset($_POST['nuevo_numero']) || isset($_POST['nuevo_nombre']) || isset($_POST['imagen']) || isset($_POST['tipo'])) {
    $nuevo_numero = '';
    $nuevo_nombre = '';
    $imagen = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['enviar'])) {
        if (isset($_POST['nuevo_numero'])) {
            $nuevo_numero = $_POST['nuevo_numero'];
        }
        if (isset($_POST['nuevo_nombre'])) {
            $nuevo_nombre = $_POST['nuevo_nombre'];
        }
        if (isset($_FILES["imagen"])) {
            $nombreArchivo = $_FILES["imagen"]["name"];
            $rutaTemporal = $_FILES["imagen"]["tmp_name"];
            $directorioDestino = "bd/foto/" . $nombreArchivo;

            if (move_uploaded_file($rutaTemporal, $directorioDestino)) {
                $imagen = $directorioDestino;
            } else {
                echo "Error al subir la imagen.";
            }
        }

        $tipo = $_POST['tipo'];

        // Consulta preparada con marcadores de posición
        $consulta = $conexion->prepare("INSERT INTO pokemon (numero, nombre, tipo, imagen) VALUES (?, ?, ?, ?)");

        // Vincular valores a los marcadores de posición
        $consulta->bind_param("ssss", $nuevo_numero, $nuevo_nombre, $tipo, $imagen);

        // Ejecutar la consulta
        if ($consulta->execute()) {
            echo "Registro insertado con éxito.";
        } else {
            echo "Error al insertar el registro: " . $conexion->error;
        }

        // Cerrar la consulta preparada
        $consulta->close();
    }

    //Despues de la query redirige al index-logueado
    header("Location: index-logueado.php");
    exit;
    $conexion->close();
}




?>