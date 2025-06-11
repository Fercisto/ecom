<?php
require_once "../modelos/Publico.php";
header("Content-Type: application/json");
$publico = new Publico();
$method = $_SERVER["REQUEST_METHOD"];
switch ($method) {
    case 'GET':
        echo json_encode($publico->getAll());
        break;
    case 'POST':
        $data = json_decode(file_get_contents('php://input'), true);
        echo json_encode(["success" => $publico->create($data)]);
        break;
    case 'PUT':
        $data = json_decode(file_get_contents('php://input'), true);
        echo json_encode(["success" => $publico->update($data)]);
        break;
    case 'DELETE':
        $data = json_decode(file_get_contents('php://input'), true);
        $id = intval($data["id_publico"]);
        echo json_encode(["success" => $publico->delete($id)]);
        break;
   
    default:
        http_response_code(405);
        echo json_encode(["error" => "Metodo no permitido", "message" => "ID no proporcionado"]);
        break;
}
?>