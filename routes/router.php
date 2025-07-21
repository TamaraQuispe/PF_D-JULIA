<?php
require_once '../Controller/UsuariosApiController.php';
header('Content-Type: application/json');

$controller = new UsuariosApiController();

// Esto simula una API REST sencilla
$accion = $_GET['action'] ?? '';

switch ($accion) {
    case 'login':
        // Recibes JSON de JS
        $json = json_decode(file_get_contents('php://input'), true);
        echo json_encode($controller->loginUsuario($json));
        break;

    case 'registrar':
        $json = json_decode(file_get_contents('php://input'), true);
        echo json_encode($controller->registrarUsuario($json));
        break;

    case 'logout':
        echo json_encode($controller->logout());
        break;

    case 'usuarioActual':
        echo json_encode($controller->obtenerUsuarioActual());
        break;

    default:
        echo json_encode(['success' => false, 'message' => 'Acción no válida']);
} 