<?php
require_once "../modelos/Orden.php";
header("Content-Type: application/json");
$orden = new Orden();
$method = $_SERVER["REQUEST_METHOD"];
switch ($method) {
    case 'GET':
        echo json_encode($orden->getAll());
        break;
    case 'POST':
        $data = json_decode(file_get_contents('php://input'), true);
        echo json_encode(["success" => $orden->create($data)]);
        break;
    case 'PUT':
        $data = json_decode(file_get_contents('php://input'), true);
        echo json_encode(["success" => $orden->update($data)]);
        break;
    case 'DELETE':
        parse_str(file_get_contents('php://input'), $data);
        echo json_encode(["success" => $orden->delete($data["id_orden"])]);
        break;
   
    default:
        http_response_code(405);
        echo json_encode(["error" => "Metodo no permitido", "message" => "ID no proporcionado"]);
        break;
}
?>