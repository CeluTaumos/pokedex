<?php
//CONSEJO DE AMIGO EL CHAT

clearstatcache();

//CONECTAR A BDD
//ELIJO LA BDD QUE DESEO

$conexion = mysqli_connect("localhost: 33067", "root", "", "pokedex");
if ($conexion->connect_error) {
    die("Error en conexion<br>");
} else {
    echo "Conexion exitosa!<br>";
}
function mostrarTodaLaTablaPokedex($conexion)
{
    //Enviar la instrucción SQL a la base de datos
    $sql = "select * from pokemon";
    $result = $conexion->query($sql);
    //AGARRAR Y PROCESAR LOS RESULTADOS （；´д｀）ゞ
    $resultAsArray = $result->fetch_all(MYSQLI_ASSOC);
    //INTENTAMOS ESTO Y NO FUNKA...
    //$json_encode = json_encode($resultAsArray);  // Corrección en el nombre de la variable
    foreach ($resultAsArray as $fila) {

        echo "Numero: " . $fila["Numero"] . " - Nombre: " . $fila["Nombre"] . " - Tipo: <img src='" . $fila["Tipo"] . "' alt='tipo' width=30 height=24>" .
        " - Imagen: <img class='mobile' src='" . $fila["Imagen"] . "' alt='tipo' width=80 height=80>";
        // Verifica si la sesión está iniciada
        if (isset($_SESSION['user']) && strpos($_SERVER['REQUEST_URI'], 'index-logueado.php') !== false) {
            // Si la sesión está iniciada, muestra los botones de Modificar y Eliminar
            echo"<form action='index-logueado.php' method='post'><button type='submit' id='{$fila['Numero']}' value='{$fila['Numero']}' name='eliminar' placeholder='Eliminar'>Eliminar</button></form>";  
            echo "<a href='cambiar.php?id={$fila['id']}& numero={$fila['Numero']}&nombre={$fila['Nombre']}'><button type='button' id='{$fila['Numero']}' name='modificar' placeholder='Modificar'>Modificar</button></a>
            ";
            }
            
            echo "<br>";
        }
}

//Cerramos conexión a la base de datos

// si se cierra las consultas no funcionan!!!!!!!!
// $conexion->close();