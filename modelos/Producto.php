<?php

    require_once('../config/conexion.php');

    class Producto {

        private $conn;

        public function __construct() {
            $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        }

        public function getAll() {
            $sql = "SELECT * FROM productos";
            $result = $this->conn->query($sql);
            if ($result->num_rows > 0) {
                return $result->fetch_all(MYSQLI_ASSOC);
            } else {
                return [];
            }
        }

        public function getById($id) {
            $stmt = $this->conn->prepare("SELECT * FROM productos WHERE id_producto = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $result = $stmt->get_result();
            return $result->fetch_assoc(); 
        }

        public function create($data) {
            $stmt = $this->conn->prepare("INSERT INTO productos (nombre_producto, descripcion, precio, stock, id_usuario, id_publico, descuento, id_categoria, publicidad) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssdiiiiii", 
                $data['nombre_producto'], 
                $data['descripcion'], 
                $data['precio'], 
                $data['stock'], 
                $data['id_usuario'],
                $data['id_publico'],
                $data['descuento'],
                $data['id_categoria'],
                $data['publicidad']
            );
            return $stmt->execute();
        }

        public function update($data) {
            $stmt = $this->conn->prepare("UPDATE productos SET nombre_producto=?, descripcion=?, precio=?, stock=?, id_usuario=?, id_publico=?, descuento=?, id_categoria=?, publicidad=? WHERE id_producto=?");
            $stmt->bind_param("ssdiiiiiii", 
                $data['nombre_producto'], 
                $data['descripcion'], 
                $data['precio'], 
                $data['stock'], 
                $data['id_usuario'],
                $data['id_publico'],
                $data['descuento'],
                $data['id_categoria'],
                $data['publicidad'],
                $data['id_producto']
            );
            return $stmt->execute();
        }

        public function delete($id) {
            $stmt = $this->conn->prepare("DELETE FROM productos WHERE id_producto=?");
            $stmt->bind_param("i", $id);
            return $stmt->execute();
        }



    }

?>