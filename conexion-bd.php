<?php
//CONSEJO DE AMIGO EL CHAT
clearstatcache();

//CONECTAR A BDD
//ELIJO LA BDD QUE DESEO
//$conexion = new mysqli("localhost", "root", "", "pokedex", 33067);
$conexion = mysqli_connect("localhost: 33067", "root", "", "pokedex");
if ($conexion->connect_error) {
    die("Error en conexion<br>");
} else {
    echo "Conexion exitosa!<br>";
}

//Enviar la instrucción SQL a la base de datos
$sql = "select * from pokemon";

$result = $conexion->query($sql);
//AGARRAR Y PROCESAR LOS RESULTADOS （；´д｀）ゞ
$resultAsArray = $result->fetch_all(MYSQLI_ASSOC);
//INTENTAMOS ESTO Y NO FUNKA...
//$json_encode = json_encode($resultAsArray);  // Corrección en el nombre de la variable


foreach ($resultAsArray as $fila) {

    echo "Numero: " . $fila["Numero"] . " - Nombre: " . $fila["Nombre"] . " - Tipo: <img src='" . $fila["Tipo"] . "' alt='tipo' width=30 height=24>" .
    " - Imagen: <img class='mobile' src='" . $fila["Imagen"] . "' alt='tipo' width=80 height=80>" .  "<br>";

}
//Aca estaria la busqueda y filtrado de resultados
$busqueda = $_POST['busqueda'];
$sql = "SELECT * FROM pokemon WHERE Nombre LIKE '%$busqueda%'";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        // Imprime los resultados
        echo "Resultado: " . $fila["Numero"] . " - Nombre: " . $fila['Nombre'] . " - Tipo: <img src='" . $fila["Tipo"] . "' alt='tipo' width=30 height=24>" .
        " - Imagen: <img class='mobile' src='" . $fila["Imagen"] . "' alt='tipo' width=100 height=100>" . "<br>";
    }
} else {
    echo "No se encontraron resultados.";
}
//Cerramos conexión a la base de datos

$conexion->close();
