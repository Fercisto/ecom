<?php

    require_once('../config/conexion.php');

    class ProductoCategoria {

        private $conn;

        public function __construct() {
            $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        }

        public function getAll() {
            $sql = "SELECT * FROM producto_categoria";
            $result = $this->conn->query($sql);
            if ($result->num_rows > 0) {
                return $result->fetch_all(MYSQLI_ASSOC);
            } else {
                return [];
            }
        }

        public function create($data) {
            $stmt = $this->conn->prepare("INSERT INTO producto_categoria (id_producto, id_categoria) VALUES (?, ?)");
            $stmt->bind_param("ii", $data['id_producto'], $data['id_categoria']);
            return $stmt->execute();
        }

        public function update($data) {
            $stmt = $this->conn->prepare("UPDATE producto_categoria SET id_categoria=? WHERE id_producto=?");
            $stmt->bind_param("ii", $data['id_categoria'], $data['id_producto']);
            return $stmt->execute();
        }

        public function delete($id_producto) {
            $stmt = $this->conn->prepare("DELETE FROM producto_categoria WHERE id_producto=?");
            $stmt->bind_param("i", $id_producto);
            return $stmt->execute();
        }

    }

?>