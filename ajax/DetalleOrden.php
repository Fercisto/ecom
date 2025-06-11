<?php
require_once "../modelos/DetalleOrden.php";
header("Content-Type: application/json");
$detalle = new DetalleOrden();
$method = $_SERVER["REQUEST_METHOD"];
switch ($method) {
    case 'GET':
        echo json_encode($detalle->getAll());
        break;
    case 'POST':
        $data = json_decode(file_get_contents('php://input'), true);
        echo json_encode(["success" => $detalle->create($data)]);
        break;
    case 'PUT':
        $data = json_decode(file_get_contents('php://input'), true);
        echo json_encode(["success" => $detalle->update($data)]);
        break;
    case 'DELETE':
        parse_str(file_get_contents('php://input'), $data);
        echo json_encode(["success" => $detalle->delete($data["id_detalle"])]);
        break;
   
    default:
        http_response_code(405);
        echo json_encode(["error" => "Metodo no permitido", "message" => "ID no proporcionado"]);
        break;
}
?>