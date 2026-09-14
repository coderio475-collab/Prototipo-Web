<?php

function ConectarBD($server, $username, $password, $database)
{
    $conn = mysqli_connect($server, $username, $password, $database);

    if (!$conn) {
        die("Error en la conexión: " . mysqli_connect_error());
    }

    return $conn;
}

?>
