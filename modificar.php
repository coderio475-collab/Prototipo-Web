<?php

include("conexion.php");
include("conectarBD.php");

$conn = ConectarBD($server, $username, $password, $database);

$id = $_GET['id'];

$consulta = "SELECT * FROM cliente WHERE idcliente = $id";

$resultado = mysqli_query($conn, $consulta);

$fila = mysqli_fetch_array($resultado);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Modificar cliente</title>
</head>

<body>

<h2>Modificar cliente</h2>

<form action="ActualizarDatos.php" method="POST">

    <input type="hidden" name="idcliente"
           value="<?php echo $fila['idcliente']; ?>">

    <label>Nombre:</label>
    <input type="text" name="Nombre"
           value="<?php echo $fila['Nombre']; ?>">
    <br><br>

    <label>Apellido:</label>
    <input type="text" name="Apellido"
           value="<?php echo $fila['Apellido']; ?>">
    <br><br>

    <label>CI:</label>
    <input type="text" name="ci"
           value="<?php echo $fila['ci']; ?>">
    <br><br>

    <label>Fecha de nacimiento:</label>
    <input type="date" name="Fechanacimiento"
           value="<?php echo $fila['Fechanacimiento']; ?>">
    <br><br>

    <label>Ciudad:</label>
    <input type="text" name="Ciudad"
           value="<?php echo $fila['Ciudad']; ?>">
    <br><br>

    <label>Calle:</label>
    <input type="text" name="Calle"
           value="<?php echo $fila['Calle']; ?>">
    <br><br>

    <input type="submit" value="Actualizar">

</form>

</body>
</html>