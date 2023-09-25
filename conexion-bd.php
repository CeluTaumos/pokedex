<?php


clearstatcache();

//CONECTAR A BDD
//ELIJO LA BDD QUE DESEO
$conexion = mysqli_connect("localhost: 33067", "root", "", "pokedex");
// if ($conexion->connect_error) {
//     die("Error en conexion<br>");
// } else {
//     echo "<div class='mt-3'>" . "Conexion exitosa!<br>" . "</div>";}

function mostrarTodaLaTablaPokedex($conexion)
{
    //Enviar la instrucción SQL a la base de datos
    $sql = "select * from pokemon";
    $result = $conexion->query($sql);
    //AGARRAR Y PROCESAR LOS RESULTADOS （；´д｀）ゞ
    $resultAsArray = $result->fetch_all(MYSQLI_ASSOC);

    echo "<div class='grid-t'> 
    <div class='grid-item'>Numero</div> 
    <div class='grid-item'>Nombre</div> 
    <div class='grid-item'>Tipo</div> 
    <div class='grid-item'>Imagen</div> </div>";


    foreach ($resultAsArray as $fila) {

 // Verifica si la sesión está iniciada
        if (isset($_SESSION['user']) && strpos($_SERVER['REQUEST_URI'], 'index-logueado.php') !== false) {
            // Si la sesión está iniciada, muestra los botones de Modificar y Eliminar

            echo "<div class='grid-i'><div class='dato'>" . $fila["Numero"] . "</div> <div class='dato'> " . $fila["Nombre"] . " </div><div class='dato'><img src='" . $fila["Tipo"] . "' alt='tipo' width=40 height=40>" .
            "</div><div class='dato'> <img class='mobile' src='" . $fila["Imagen"] . "' alt='tipo' width=80 height=80> </div>";

            echo "<div class='dato'><a href='cambiar.php?id={$fila['id']}&numero={$fila['Numero']}&nombre={$fila['Nombre']}' class='link-offset-2 link-underline link-underline-opacity-0'><button type='button' id='{$fila['Numero']}' name='modificar' placeholder='Modificar' class='d-inline btn btn-outline-primary'>Cambiar</button></a>" . "</div>";

            echo "<form class='dato' action='index-logueado.php' method='post' class='container d-inline'><button type='submit' id='{$fila['Numero']}' value='{$fila['Numero']}' name='eliminar' placeholder='Eliminar' class='d-inline btn btn-outline-danger'>Borrar</button></form>";
            
        } else{
            echo "<div class='grid'><div class='dato'>" . $fila["Numero"] . "</div> <div class='dato'> " . $fila["Nombre"] . " </div><div class='dato'><img src='" . $fila["Tipo"] . "' alt='tipo' width=40 height=40>" .
            "</div><div class='dato'> <img class='mobile' src='" . $fila["Imagen"] . "' alt='tipo' width=80 height=80> </div> </div>";
        // Verifica si la sesión está iniciada
        }
    
    }
   
}

//$conexion->close();