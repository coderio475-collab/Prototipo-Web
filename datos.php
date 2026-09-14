<?php

include("conexion.php");
include("conectarBD.php");

$conn = ConectarBD($server, $username, $password, $database);

$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$ci = $_POST['ci'];
$Fechanacimiento = $_POST['Fechanacimiento'];
$Ciudad = $_POST['Ciudad'];
$Calle = $_POST['Calle'];

$consulta = "INSERT INTO cliente
(Nombre, Apellido, ci, Fechanacimiento, Ciudad, Calle)
VALUES
('$Nombre', '$Apellido', '$ci', '$Fechanacimiento', '$Ciudad', '$Calle')";

if (mysqli_query($conn, $consulta)) {
    echo "Cliente registrado correctamente.";
    echo "<br><br>";
    echo "<a href='Mostrar.php'>Ver clientes</a>";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);

?>