
<?php
include_once("conexion-bd.php");
//BUSQUEDA POR NOMBRE
if (isset($_POST['busqueda'])) {

    $busqueda = $_POST['busqueda'];
    $sql = "SELECT * FROM pokemon WHERE Nombre LIKE '%$busqueda%'OR Tipo LIKE '%$busqueda%' OR Numero LIKE '$busqueda'";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 1) {
        while ($fila = $resultado->fetch_assoc()) {
            // Imprime los resultados
            echo "Resultado: " . "Numero: " . $fila["Numero"] . " - Nombre: " . $fila["Nombre"] . " - Tipo: <img src='" . $fila["Tipo"] . "' alt='tipo' width=30 height=24>" .
                " - Imagen: <img class='mobile' src='" . $fila["Imagen"] . "' alt='tipo' width=100 height=100>" . 
                "<form action='ver-detalle.php' method='POST'><button name='detalle' value='" . $fila["Numero"] . "'>Ver detalles</button></form>" . "<br>";
        }
    } else if ($resultado->num_rows == 1) {
        while ($fila = $resultado->fetch_assoc()) {

            echo "<section style='display: flex'> <img class='mobile' src='" . $fila["Imagen"] . "' alt='tipo' width=350 height=350>
            <div> <h1>".$fila["Nombre"]."</h1>  <p>".$fila["Descripcion"]."</p> </div> </section>";
        }
    } else {

        echo "No se encontraron resultados.";
    }

} else {
    mostrarTodaLaTablaPokedex($conexion);
}
$eliminar = "";

//Usa el valor de id del input para eliminar
if (isset($_POST['eliminar'])) {
    $numero = $_POST['eliminar'];
    $eliminar = "DELETE FROM pokemon WHERE Numero LIKE " . $numero;

    $conexion->query($eliminar);
    //header("Location: index-logueado.php");
    //exit;

}
//Modificar
/* 
if (isset($_POST['modificar'])) {
    $elegido = $_POST['modificar'];
    echo " el valor a modificar es " . var_dump($elegido);
}*/

?>