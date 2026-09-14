<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Registrar cliente</title>
</head>

<body>

<h2>Registrar cliente</h2>

<form action="insertardatos.php" method="POST">

    <label>Nombre:</label>
    <input type="text" name="Nombre" required>
    <br><br>

    <label>Apellido:</label>
    <input type="text" name="Apellido" required>
    <br><br>

    <label>CI:</label>
    <input type="text" name="ci" required>
    <br><br>

    <label>Fecha de nacimiento:</label>
    <input type="date" name="Fechanacimiento" required>
    <br><br>

    <label>Ciudad:</label>
    <input type="text" name="Ciudad" required>
    <br><br>

    <label>Calle:</label>
    <input type="text" name="Calle" required>
    <br><br>

    <input type="submit" value="Registrar">

</form>

<br>

<a href="Mostrar.php">Ver clientes</a>

</body>
</html>
