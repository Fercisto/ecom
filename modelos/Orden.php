<?php

    require_once('../config/conexion.php');

    class Orden {

        private $conn;

        public function __construct() {
            $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        }

        public function getAll() {
            $sql = "SELECT * FROM ordenes";
            $result = $this->conn->query($sql);
            if ($result->num_rows > 0) {
                return $result->fetch_all(MYSQLI_ASSOC);
            } else {
                return [];
            }
        }

        public function create($data) {
            $stmt = $this->conn->prepare("INSERT INTO ordenes (id_usuario, fecha_orden, total, estado) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("isds", $data['id_usuario'], $data['fecha_orden'], $data['total'], $data['estado']);
            return $stmt->execute();
        }

        public function update($data) {
            $stmt = $this->conn->prepare("UPDATE ordenes SET id_usuario=?, fecha_orden=?, total=?, estado=? WHERE id_orden=?");
            $stmt->bind_param("isdsi", $data['id_usuario'], $data['fecha_orden'], $data['total'], $data['estado'], $data['id_orden']);
            return $stmt->execute();
        }

        public function delete($id) {
            $stmt = $this->conn->prepare("DELETE FROM ordenes WHERE id_orden=?");
            $stmt->bind_param("i", $id);
            return $stmt->execute();
        }

    }

?>