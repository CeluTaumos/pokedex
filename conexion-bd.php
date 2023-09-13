<?php
header('Content-Type: text/html; charset=utf-8');
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



// Obtener y procesar los resultados

$resultAsArray = $result->fetch_all(MYSQLI_ASSOC);
$json_encode = json_encode($resultAsArray);  // Corrección en el nombre de la variable


foreach ($resultAsArray as $fila) {

    echo "Numero: " . $fila["Numero"] . " - Nombre: " . $fila["Nombre"] . " -Tipo:" . $fila["Tipo"] .
        " -Imagen:" . $fila["Imagen"] .  "<br>";
}



//Cerramos conexión a la abse de datos

$conexion->close();
