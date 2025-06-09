<?php

    require_once('conexion.php');

    class Categoria {

        private $conn;

        public function __construct() {
            $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        }

        public function getAll() {
            $sql = "SELECT * FROM categorias";
            $result = $this->conn->query($sql);
            if ($result->num_rows > 0) {
                return $result->fetch_all(MYSQLI_ASSOC);
            } else {
                return [];
            }
        }

        public function create($data) {
            $stmt = $this->conn->prepare("INSERT INTO categorias (nombre_categoria) VALUES (?)");
            $stmt->bind_param("s", $data['nombre_categoria']);
            return $stmt->execute();
        }

        public function update($data) {
            $stmt = $this->conn->prepare("UPDATE categorias SET nombre_categoria=?");
            $stmt->bind_param("s", $data['nombre_categoria']);
            return $stmt->execute();
        }

        public function delete($id) {
            $stmt = $this->conn->prepare("DELETE FROM categorias WHERE id_categoria=?");
            $stmt->bind_param("i", $id);
            return $stmt->execute();
        }

    }

?>