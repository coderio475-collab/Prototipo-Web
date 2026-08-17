<?php

require_once __DIR__ . "/../controllers/UsuarioController.php";

$controller = new UsuarioController();
$usuarios = $controller->listar();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Usuarios</title>
</head>

<body>

    <h1>Lista de usuarios</h1>

    <?php foreach ($usuarios as $usuario): ?>

        <p>
            <?php echo $usuario['Nombre']; ?>
            <?php echo $usuario['Apellido']; ?>
        </p>

    <?php endforeach; ?>

</body>
</html>
