<?php

include("conexion.php");
include("conectarBD.php");

$conn = ConectarBD($server, $username, $password, $database);

$id = $_POST['idcliente'];

$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$ci = $_POST['ci'];
$Fechanacimiento = $_POST['Fechanacimiento'];
$Ciudad = $_POST['Ciudad'];
$Calle = $_POST['Calle'];

$consulta = "UPDATE cliente SET
Nombre='$Nombre',
Apellido='$Apellido',
ci='$ci',
Fechanacimiento='$Fechanacimiento',
Ciudad='$Ciudad',
Calle='$Calle'
WHERE idcliente=$id";

if (mysqli_query($conn, $consulta)) {

    echo "Datos actualizados correctamente.";
    echo "<br><br>";
    echo "<a href='Mostrar.php'>Volver</a>";

} else {

    echo "Error: " . mysqli_error($conn);

}

mysqli_close($conn);

?>
