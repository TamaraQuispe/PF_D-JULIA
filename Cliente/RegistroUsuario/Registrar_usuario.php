<?php
require_once __DIR__ . '/../../controller/UsuariosController.php';

header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);

if (!$data || !isset($data['nombre'], $data['correo'], $data['contrasena'], $data['telefono'], $data['direccion'])) {
    echo json_encode(['success' => false, 'message' => 'Datos incompletos']);
    exit;
}

$nombre = $data['nombre'];
$correo = $data['correo'];
$contraseña = $data['contrasena'];
$telefono = $data['telefono'];
$direccion = $data['direccion'];

$controller = new UsuariosController();
$resultado = $controller->registrar($nombre, $correo, $contraseña, $telefono, $direccion);

echo json_encode($resultado);
