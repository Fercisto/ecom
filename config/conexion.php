<?php

    require_once 'global.php';

    $conexion = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    
    // Setear el encode en bd
    mysqli_query($conexion, "SET NAMES '" . DB_ENCODE . "'");

    if (mysqli_connect_error()) {
        printf("Conexión fallida: %s\n", mysqli_connect_error());
        exit();
    } 

    if (!function_exists('ejectuarConsulta')) {
        function ejecutarConsulta($sql) {
            global $conexion;
            $query = $conexion->query($sql);
            return $query;
        }
    
        function ejecutarConsultaSecuencial($sql) {
            global $conexion;
            $query = $conexion->multi_query($sql);
            return $query;
        }

        function ejecutarUpdate($sql) {
            global $conexion;
            $query = $conexion->query($sql);
            if (!mysqli_query($conexion, $sql)) {
                return("Error de update: " . mysqli_error($conexion));
            } else {
                return $query;
            }
        }

        function ejecturarConsultaSimpleFila($sql) {
            global $conexion;
            $query = $conexion->query($sql);
            $row = $query->fetch_assoc();
            return $row;
        }

        function ejecutarConsultaId($sql) {
            global $conexion;
            $query = $conexion->query($sql);
            return $conexion->insert_id;
        }

        function limpiarCadena($str) {
            global $conexion;
            $str = mysqli_real_escape_string($conexion, trim($str));
            return htmlspecialchars_decode($str);
        }

    }

?>