<?php
if(isset($_POST['eliminar'])){
    $sql="DELETE FROM pokemon WHERE Numero LIKE ''numero' ";
    $conexion->query($sql);
}
if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        // Imprime los resultados
        echo "Resultado: " . "Numero: " . $fila["Numero"] . " - Nombre: " . $fila["Nombre"] . " - Tipo: <img src='" . $fila["Tipo"] . "' alt='tipo' width=30 height=24>" .
            " - Imagen: <img class='mobile' src='" . $fila["Imagen"] . "' alt='tipo' width=100 height=100>" . "<br>";
    }
} else {
    echo "No se encontraron resultados.";
}
