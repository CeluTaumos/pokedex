<?php
include_once("conexion-bd.php");
$eliminar= "";
$resultado = null;
if(isset($_POST['eliminar'])){
    $numero = $_POST['eliminar'];
    $eliminar="DELETE FROM pokemon WHERE Numero LIKE 1 ";
    $sql = "SELECT * FROM pokemon";
    $resultado = $conexion->query($sql);
    
}
if ($conexion->query($eliminar) === TRUE) {
    echo "Elemento eliminado con éxito.";
} else {
    echo "Error al eliminar el elemento: " . $conexion->error;
}

if ($resultado !== null && $resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        // Imprime los resultados
        echo "Resultado: " . "Numero: " . $fila["Numero"] . " - Nombre: " . $fila["Nombre"] . " - Tipo: <img src='" . $fila["Tipo"] . "' alt='tipo' width=30 height=24>" .
            " - Imagen: <img class='mobile' src='" . $fila["Imagen"] . "' alt='tipo' width=100 height=100>" . "<br>";
    }
} else {
    echo "No se encontraron resultados.";
}
?>