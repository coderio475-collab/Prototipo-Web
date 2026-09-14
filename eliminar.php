<?php

include("conexion.php");
include("conectarBD.php");

$conn = ConectarBD($server, $username, $password, $database);

$id = $_GET['id'];

$consulta = "DELETE FROM cliente WHERE idcliente = $id";

if (mysqli_query($conn, $consulta)) {

    echo "Cliente eliminado correctamente.";
    echo "<br><br>";
    echo "<a href='Mostrar.php'>Volver</a>";

} else {

    echo "Error: " . mysqli_error($conn);

}

mysqli_close($conn);

?>
