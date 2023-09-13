<?php
//CONSEJO DE AMIGO EL CHAT
clearstatcache();

//CONECTAR A BDD
//ELIJO LA BDD QUE DESEO
//$conexion = new mysqli("localhost", "root", "", "pokedex", 33067);
$conexion = mysqli_connect("localhost:33067", "root", "", "pokedex");
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
    " - Imagen: <img src='" . $fila["Imagen"] . "' alt='tipo' width=100 height=100>" .  "<br>";

}



//Cerramos conexión a la abse de datos

$conexion->close();
