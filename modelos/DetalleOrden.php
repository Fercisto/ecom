<?php

    require_once('../config/conexion.php');

    class DetalleOrden {

        private $conn;

        public function __construct() {
            $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        }

        public function getAll() {
            $sql = "SELECT * FROM detalles";
            $result = $this->conn->query($sql);
            if ($result->num_rows > 0) {
                return $result->fetch_all(MYSQLI_ASSOC);
            } else {
                return [];
            }
        }

        public function create($data) {
            $stmt = $this->conn->prepare("INSERT INTO detalles (id_orden, id_producto, cantidad, precio_unitario) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("iiid", $data['id_orden'], $data['id_producto'], $data['cantidad'], $data['precio_unitario']);
            return $stmt->execute();
        }

        public function update($data) {
            $stmt = $this->conn->prepare("UPDATE detalles SET id_orden=?, id_producto=?, cantidad=?, precio_unitario=? WHERE id_detalle=?");
            $stmt->bind_param("iiidi", $data['id_orden'], $data['id_producto'], $data['cantidad'], $data['precio_unitario'], $data['id_detalle']);
            return $stmt->execute();
        }

        public function delete($id) {
            $stmt = $this->conn->prepare("DELETE FROM detalles WHERE id_detalle=?");
            $stmt->bind_param("i", $id);
            return $stmt->execute();
        }

    }

?>