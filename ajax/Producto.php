<?php
require_once "../modelos/Producto.php";
header("Content-Type: application/json");
$producto = new Producto();
$method = $_SERVER["REQUEST_METHOD"];
switch ($method) {
    case 'GET':
        if (isset($_GET['id'])) {
            $id = intval($_GET['id']);
            echo json_encode($producto->getById($id));
        } else {
            echo json_encode($producto->getAll());
        }
        break;
    case 'POST':
        $data = json_decode(file_get_contents('php://input'), true);
        echo json_encode(["success" => $producto->create($data)]);
        break;
    case 'PUT':
        $data = json_decode(file_get_contents('php://input'), true);
        echo json_encode(["success" => $producto->update($data)]);
        break;
    case 'DELETE':
        $data = json_decode(file_get_contents('php://input'), true);
        $id = intval($data["id_producto"]);
        echo json_encode(["success" => $producto->delete($id)]);
        break;
    default:
        http_response_code(405);
        echo json_encode(["error" => "Metodo no permitido", "message" => "ID no proporcionado"]);
        break;
}
?>