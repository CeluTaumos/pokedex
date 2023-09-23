<?php
include_once("conexion-bd.php");
//BUSQUEDA POR NOMBRE
if (isset($_POST['busqueda'])) {

    $busqueda = $_POST['busqueda'];
    $sql = "SELECT * FROM pokemon WHERE Nombre LIKE '%$busqueda%'OR Tipo LIKE '%$busqueda%' OR Numero LIKE '$busqueda'";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 1) {
        echo "<div class='grid-t'> 
        <div class='grid-item'>Numero</div> 
        <div class='grid-item'>Nombre</div> 
        <div class='grid-item'>Tipo</div> 
        <div class='grid-item'>Imagen</div> </div>";
        while ($fila = $resultado->fetch_assoc()) {

            // Imprime los resultados
            echo "<div class='grid-i'><div class='dato'>" . $fila["Numero"] . "</div> <div class='dato'> " . $fila["Nombre"] . " </div><div class='dato'><img src='" . $fila["Tipo"] . "' alt='tipo' width=40 height=40>" .
                "</div><div class='dato'> <img class='mobile' src='" . $fila["Imagen"] . "' alt='tipo' width=80 height=80> </div>";

            echo "<div class='dato'><a href='cambiar.php?id={$fila['id']}&numero={$fila['Numero']}&nombre={$fila['Nombre']}' class='link-offset-2 link-underline link-underline-opacity-0'><button type='button' id='{$fila['Numero']}' name='modificar' placeholder='Modificar' class='d-inline btn btn-outline-primary'>Modificar</button></a>" . "</div>";

            echo "<form class='dato' action='index-logueado.php' method='post' class='container d-inline'><button type='submit' id='{$fila['Numero']}' value='{$fila['Numero']}' name='eliminar' placeholder='Eliminar' class='d-inline btn btn-outline-danger mb-3'>Eliminar -- doble click</button></form>";

        }
    } else if ($resultado->num_rows == 1) {
        while ($fila = $resultado->fetch_assoc()) {

            echo "<section style='display: flex'> <img class='mobile' src='" . $fila["Imagen"] . "' alt='tipo' width=350 height=350> 
            <div> <h1>#" . $fila["Numero"] ." ". $fila["Nombre"] ."   "."<img  id='tip' class='mobile' src='" . $fila["Tipo"] . "' alt='tipo' width=40 height=40> ". "</h1>  <p>" . $fila["Descripcion"] . "</p> </div> </section>";
            echo "<a id='volv' href='index-logueado.php' class='btn btn-warning btn-lg active' role='button' aria-pressed='true'>volver</a>";

        }
    } else {
        echo "No se encontraron resultados.";
    }
} else {
    mostrarTodaLaTablaPokedex($conexion);
}
$eliminar = "";

// $redireccion = "index-logueado.php";
//Usa el valor de id del input para eliminar
if (isset($_POST['eliminar'])) {
    $numero = $_POST['eliminar'];
    $eliminar = "DELETE FROM pokemon WHERE Numero LIKE " . $numero;

    $conexion->query($eliminar);
    // $redireccion = "index-logueado.php";
}
// header("Location: $redireccion");
