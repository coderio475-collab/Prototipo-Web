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

    public function guardar($datos)
    {
        $datos["nombre"] = mb_convert_case(trim($datos["nombre"]), MB_CASE_TITLE, "UTF-8");
        $datos["apellido"] = mb_convert_case(trim($datos["apellido"]), MB_CASE_TITLE, "UTF-8");

        $sql = "INSERT INTO usuarios
            (Tipo, Nombre, Apellido, Cedula, Correo, Telefono, Curso, Titulo, Area)
            VALUES (:tipo, :nombre, :apellido, :cedula, :correo, :telefono, :curso, :titulo, :area)";
        $consulta = $this->conexion->prepare($sql);
        $consulta->execute([
            ":tipo" => $datos["tipo"],
            ":nombre" => $datos["nombre"],
            ":apellido" => $datos["apellido"],
            ":cedula" => trim($datos["cedula"]) !== "" ? trim($datos["cedula"]) : null,
            ":correo" => $datos["correo"],
            ":telefono" => $datos["telefono"],
            ":curso" => trim($datos["curso"]) !== "" ? trim($datos["curso"]) : null,
            ":titulo" => trim($datos["titulo"]) !== "" ? trim($datos["titulo"]) : null,
            ":area" => trim($datos["area"]) !== "" ? trim($datos["area"]) : null
        ]);
    }
}
