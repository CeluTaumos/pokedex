<?php
include_once("conexion-bd.php");
//BUSQUEDA POR NOMBRE
if (isset($_POST['busqueda'])) {

    $busqueda = $_POST['busqueda'];
    $sql = "SELECT * FROM pokemon WHERE Nombre LIKE '%$busqueda%'OR Tipo LIKE '%$busqueda%' OR Numero LIKE '$busqueda'";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            // Imprime los resultados
            echo "Resultado: " . "Numero: " . $fila["Numero"] . " - Nombre: " . $fila["Nombre"] . " - Tipo: <img src='" . $fila["Tipo"] . "' alt='tipo' width=30 height=24>" .
                " - Imagen: <img class='mobile' src='" . $fila["Imagen"] . "' alt='tipo' width=100 height=100>" . "<br>";
        }
    } else {
        echo "No se encontraron resultados.";
    }

} else {
    mostrarTodaLaTablaPokedex($conexion);
}


?>