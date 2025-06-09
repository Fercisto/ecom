<?php

    require_once('../modelos/Usuario.php');
    header('Content-Type: application/json');

    $usuario = new Usuario();
    $method = $_SERVER['REQUEST_METHOD'];

    switch($method) {
        case 'GET':
            echo json_encode($usuario->getAll());
            break;
        case 'POST':
            $data = json_decode(file_get_contents('php://input'), true);
            echo json_encode(['success' => $usuario->create($data)]);
            break;
        case 'PUT':
            $data = json_decode(file_get_contents('php://input'), true);
            echo json_encode(['success' => $usuario->update($data)]);
            break;
        case 'DELETE':
            $data = json_decode(file_get_contents('php://input'), true);
            $id = intval($data['id_usuario']);
            echo json_encode(['success' => $usuario->delete($id)]);
            break;
        default:
            http_response_code(405);
            echo json_encode(['error' => 'Método no permitido']);
            break;

    }

?>