<?php

    require_once('conexion.php');

    class Carrito {

        private $conn;

        public function __construct() {
            $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        }

        public function getAll() {
            $sql = "SELECT * FROM carrito";
            $result = $this->conn->query($sql);
            if ($result->num_rows > 0) {
                return $result->fetch_all(MYSQLI_ASSOC);
            } else {
                return [];
            }
        }

        public function create($data) {
            $stmt = $this->conn->prepare("INSERT INTO carrito (id_usuario, id_producto, cantidad) VALUES (?, ?, ?)");
            $stmt->bind_param("iii", $data['id_usuario'], $data['id_producto'], $data['cantidad']);
            return $stmt->execute();
        }

        public function update($data) {
            $stmt = $this->conn->prepare("UPDATE carrito SET cantidad=? WHERE id_usuario=? AND id_producto=?");
            $stmt->bind_param("iii", $data['cantidad'], $data['id_usuario'], $data['id_producto']);
            return $stmt->execute();
        }

        public function delete($id) {
            $stmt = $this->conn->prepare("DELETE FROM carrito WHERE id=?");
            $stmt->bind_param("i", $id);
            return $stmt->execute();
        }

    }

?>