<?php
private $bd = "Prototipo-Web";
class Conexion
{
    private $host = "localhost";
    private $usuario = "root";
    private $password = "";
    private $bd = "NOMBRE_DE_TU_BASE_DE_DATOS";

    public function conectar()
    {
        try {
            $conexion = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->bd . ";charset=utf8",
                $this->usuario,
                $this->password
            );

            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conexion;

        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }
}
