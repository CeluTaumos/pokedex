<?php


clearstatcache();

//CONECTAR A BDD
//ELIJO LA BDD QUE DESEO
$conexion = mysqli_connect("localhost: 33067", "root", "", "pokedex");
if ($conexion->connect_error) {
    die("Error en conexion<br>");
} else {
    echo "<div class='mt-3'>" . "Conexion exitosa!<br>" . "</div>";
}


function mostrarTodaLaTablaPokedex($conexion)
{
    //Enviar la instrucción SQL a la base de datos
    $sql = "select * from pokemon";
    $result = $conexion->query($sql);
    //AGARRAR Y PROCESAR LOS RESULTADOS （；´д｀）ゞ
    $resultAsArray = $result->fetch_all(MYSQLI_ASSOC);

    foreach ($resultAsArray as $fila) {

        echo "<div class='border border-3 border-primary mb-4'>"."Numero: " . $fila["Numero"] . " - Nombre: " . $fila["Nombre"] . " - Tipo: <img src='" . $fila["Tipo"] . "' alt='tipo' width=30 height=24>" .
            " - Imagen: <img class='mobile' src='" . $fila["Imagen"] . "' alt='tipo' width=80 height=80>" ."</div>";
        // Verifica si la sesión está iniciada
        if (isset($_SESSION['user']) && strpos($_SERVER['REQUEST_URI'], 'index-logueado.php') !== false) {
            // Si la sesión está iniciada, muestra los botones de Modificar y Eliminar
            
            echo "<span class='border d-inline'>"."<form action='index-logueado.php' method='post'><button type='submit' id='{$fila['Numero']}' value='{$fila['Numero']}' name='eliminar' placeholder='Eliminar' class='d-inline btn btn-info mb-3'>Eliminar-- doble click</button></form>";
            echo  "<a href='cambiar.php?id={$fila['id']}&numero={$fila['Numero']}&nombre={$fila['Nombre']}'><button type='button' id='{$fila['Numero']}' name='modificar' placeholder='Modificar' class='d-inline btn btn-success mb-3'>Modificar</button></a>"."</span>"."</div>";

            }

        
    }
}

 //$conexion->close();