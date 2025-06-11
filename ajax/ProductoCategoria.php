<?php
require_once "../modelos/ProductoCategoria.php";
header("Content-Type: application/json");
$productoCategoria = new ProductoCategoria();
$method = $_SERVER["REQUEST_METHOD"];
switch ($method) {
    case 'GET':
        echo json_encode($productoCategoria->getAll());
        break;
    case 'POST':
        $data = json_decode(file_get_contents('php://input'), true);
        echo json_encode(["success" => $productoCategoria->create($data)]);
        break;
    case 'PUT':
        $data = json_decode(file_get_contents('php://input'), true);
        echo json_encode(["success" => $productoCategoria->update($data)]);
        break;
    case 'DELETE':
        $data = json_decode(file_get_contents('php://input'), true);
        $id = intval($data["id_producto"]);
        echo json_encode(["success" => $productoCategoria->delete($id)]);
        break;
   
    default:
        http_response_code(405);
        echo json_encode(["error" => "Metodo no permitido", "message" => "ID no proporcionado"]);
        break;
}
?>