<?php
include_once("conexion-bd.php");
$eliminar= "";
$resultado = null;
//Como obtener el valor del id del input
if(isset($_POST['eliminar'])){
    $numero = $_POST['eliminar'];
    $eliminar="DELETE FROM pokemon WHERE Numero LIKE ".$numero;
    
    $conexion->query($eliminar);
}

?>