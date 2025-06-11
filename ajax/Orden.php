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
        $data = json_decode(file_get_contents('php://input'), true);
        $id = intval($data["id_orden"]);
        echo json_encode(["success" => $orden->delete($id)]);
        break;
   
    default:
        http_response_code(405);
        echo json_encode(["error" => "Metodo no permitido", "message" => "ID no proporcionado"]);
        break;
}
?>