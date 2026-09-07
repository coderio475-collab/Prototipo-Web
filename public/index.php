<?php

require_once __DIR__ . "/../app/controllers/UsuarioController.php";

$controller = new UsuarioController();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
	$tipo = $_POST["tipo"] ?? "estudiante";
	$paginaRegistro = "../seconds_index/registro.html";

	try {
		$controller->guardar([
			"tipo" => $_POST["tipo"] ?? "",
			"nombre" => $_POST["nombre"] ?? "",
			"apellido" => $_POST["apellido"] ?? "",
			"cedula" => $_POST["cedula"] ?? "",
			"correo" => $_POST["correo"] ?? "",
			"telefono" => $_POST["telefono"] ?? "",
			"curso" => $_POST["curso"] ?? "",
			"titulo" => $_POST["titulo"] ?? "",
			"area" => $_POST["area"] ?? ""
		]);
		header("Location: " . $paginaRegistro . "?registro=ok&tipo=" . urlencode($tipo));
	} catch (Throwable $error) {
		header("Location: " . $paginaRegistro . "?registro=error&tipo=" . urlencode($tipo));
	}

	exit;
}

require_once __DIR__ . "/../app/views/usuarios.php";
