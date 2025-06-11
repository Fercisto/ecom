<?php

    require_once('../config/conexion.php');

    class Usuario {

        private $conn;

        public function __construct() {
            $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        }

        public function getAll() {
            $sql = "SELECT * FROM usuarios";
            $result = $this->conn->query($sql);
            if ($result->num_rows > 0) {
                return $result->fetch_all(MYSQLI_ASSOC);
            } else {
                return [];
            }
        }

        public function create($data) {
            $stmt = $this->conn->prepare("INSERT INTO usuarios (nombre, correo, contrasena, telefono, direccion) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $data['nombre'], $data['correo'], $data['contrasena'], $data['telefono'], $data['direccion']);
            return $stmt->execute();
        }

        public function update($data) {
            $stmt = $this->conn->prepare("UPDATE usuarios SET nombre=?, correo=?, contrasena=?, telefono=?, direccion=? WHERE id_usuario=?");
            $stmt->bind_param("sssssi", $data['nombre'], $data['correo'], $data['contrasena'], $data['telefono'], $data['direccion'], $data['id_usuario']);
            return $stmt->execute();
        }

        public function delete($id) {
            $stmt = $this->conn->prepare("DELETE FROM usuarios WHERE id_usuario=?");
            $stmt->bind_param("i", $id);
            return $stmt->execute();
        }

    }

?>