    <?php
        require_once 'conexion.php';

        header('Content-Type: application/json');
    
        $logFile = 'login.log';

        // Validar funcionamiento de log
        if (file_exists($logFile)) {
            if (!is_writable( __DIR__ )) {
                echo json_encode([
                    'success' => false,
                    'message' => 'No hay permisos'
                ]);
                exit;
            }
        }

        function guardarLog($usuario, $estado) {
            global $logFile;
            $fecha = date('Y-m-d H:i:s');
            $ip = $_SERVER['REMOTE_ADDR'] ?? 'N/A';
            $navegador = $_SERVER['HTTP_USER_AGENT'] ?? 'N/A';
            $entrada = "[$fecha] IP: [$ip] usuario: $usuario resultado: $estado nav: $navegador\n";
            file_put_contents($logFile, $entrada, FILE_APPEND);
        }
        
        // Leer datos de JSON
        $input = json_decode(file_get_contents('php://input'), true);

        if($_SERVER['REQUEST_METHOD'] === 'POST' && $input) {
            $nombre = $conexion->real_escape_string($input['nombre'] ?? '');
            $contrasena = $conexion->real_escape_string($input['pass'] ?? '');

            $sql = "SELECT * FROM usuarios WHERE nombre = '$nombre' AND contrasena = '$contrasena'";
            $result = $conexion->query($sql);

            if($result && $result->num_rows === 1) {
                guardarLog($nombre, 'Exito');
                echo json_encode([
                    'success' => true,
                    'message' => 'Bienvenido, ' . $nombre
                ]);
            } else {
                guardarLog($nombre, 'Fallo');
                echo json_encode([
                    'success' => false,
                    'message' => 'Credenciales incorrectas, intente de nuevo' 
                ]);
            }
        } else {
            guardarLog($nombre, 'Error de datos');
            echo json_encode([
                'success' => false,
                'message' => 'Acceso denegado, revise los datos' 
            ]);
        }
        
    ?>