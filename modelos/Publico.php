<?php

    require_once('../config/conexion.php');

    class Publico {

        private $conn;

        public function __construct() {
            $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        }

        public function getAll() {
            $sql = "SELECT * FROM publico";
            $result = $this->conn->query($sql);
            if ($result->num_rows > 0) {
                return $result->fetch_all(MYSQLI_ASSOC);
            } else {
                return [];
            }
        }

        public function create($data) {
            $stmt = $this->conn->prepare("INSERT INTO publico (nombre_publico) VALUES (?)");
            $stmt->bind_param("s", $data['nombre_publico']);
            return $stmt->execute();
        }

        public function update($data) {
            $stmt = $this->conn->prepare("UPDATE publico SET nombre_publico=?");
            $stmt->bind_param("s", $data['nombre_publico']);
            return $stmt->execute();
        }

        public function delete($id) {
            $stmt = $this->conn->prepare("DELETE FROM publico WHERE id_publico=?");
            $stmt->bind_param("i", $id);
            return $stmt->execute();
        }

    }

?>