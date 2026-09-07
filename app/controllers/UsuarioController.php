<?php

require_once __DIR__ . "/../models/Usuario.php";

class UsuarioController
{
    private $usuario;

    public function __construct()
    {
        $this->usuario = new Usuario();
    }

    public function listar()
    {
        return $this->usuario->obtenerTodos();
    }

    public function guardar($datos)
    {
        if (!in_array($datos["tipo"], ["estudiante", "docente"], true)) {
            throw new InvalidArgumentException("El tipo de registro no es válido.");
        }

        $camposObligatorios = ["tipo", "nombre", "apellido", "cedula", "correo", "telefono"];

        if ($datos["tipo"] === "estudiante") {
            $camposObligatorios[] = "curso";
        } else {
            $camposObligatorios[] = "titulo";
            $camposObligatorios[] = "area";
        }

        foreach ($camposObligatorios as $campo) {
            if (!isset($datos[$campo]) || trim($datos[$campo]) === "") {
                throw new InvalidArgumentException("El campo {$campo} es obligatorio.");
            }
        }

        if (!filter_var($datos["correo"], FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException("El correo electrónico no es válido.");
        }

        $this->usuario->guardar($datos);
    }
}
