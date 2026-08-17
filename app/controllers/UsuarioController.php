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
}
