<?php
header('Content-Type: application/json');
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Conexión desde config
require_once('../../config/Conexion.php');

$productos = [];

// Verifica que la conexión esté activa
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Prepara el procedimiento
$stmt = $conexion->prepare("CALL sp_obtener_productos()");
if (!$stmt) {
    die("Error al preparar: " . $conexion->error);
}

// Ejecuta
if (!$stmt->execute()) {
    die("Error al ejecutar: " . $stmt->error);
}

// Obtener resultados
$resultado = $stmt->get_result();
if (!$resultado) {
    die("Error al obtener resultados: " . $stmt->error);
}

// Procesar resultados
while ($fila = $resultado->fetch_assoc()) {
    $productos[] = [
        "id" => $fila['id'],
        "name" => $fila['name'],
        "price" => "S/" . number_format($fila['price'], 2),
        "category" => $fila['category'],
        "image" => "../imagenes/" . $fila['image']
    ];
}

// Retornar JSON
echo json_encode($productos);

// Cierra conexiones
$resultado->free();
$stmt->close();
$conexion->close();
?>


