<?php

include("conexion.php");
include("conectarBD.php");

$conn = ConectarBD($server, $username, $password, $database);

$consulta = "SELECT * FROM cliente";

$resultado = mysqli_query($conn, $consulta);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Mostrar clientes</title>
</head>

<body>

<h2>Lista de clientes</h2>

<table border="1">

    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>CI</th>
        <th>Fecha nacimiento</th>
        <th>Ciudad</th>
        <th>Calle</th>
        <th>Acciones</th>
    </tr>

<?php

while ($fila = mysqli_fetch_array($resultado)) {

    echo "<tr>";

    echo "<td>" . $fila['idcliente'] . "</td>";
    echo "<td>" . $fila['Nombre'] . "</td>";
    echo "<td>" . $fila['Apellido'] . "</td>";
    echo "<td>" . $fila['ci'] . "</td>";
    echo "<td>" . $fila['Fechanacimiento'] . "</td>";
    echo "<td>" . $fila['Ciudad'] . "</td>";
    echo "<td>" . $fila['Calle'] . "</td>";

    echo "<td>";
    echo "<a href='Modificar.php?id=" . $fila['idcliente'] . "'>Modificar</a> ";
    echo "<a href='Eliminar.php?id=" . $fila['idcliente'] . "'>Eliminar</a>";
    echo "</td>";

    echo "</tr>";
}

?>

</table>

<br>

<a href="registrar.php">Registrar nuevo cliente</a>

</body>
</html>

<?php

mysqli_close($conn);

?>
