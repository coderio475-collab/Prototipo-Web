<?php

require_once __DIR__ . "/../../database/conexion.php";

class Usuario
{
    private $conexion;

    public function __construct()
    {
        $this->conexion = (new Conexion())->conectar();
    }

    public function obtenerTodos()
    {
        $sql = "SELECT * FROM usuarios";
        $consulta = $this->conexion->query($sql);

        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }
}
