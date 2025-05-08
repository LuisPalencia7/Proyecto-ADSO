<?php
// Incluir la conexión a la base de datos
include("conexion.php");

// Verificar si el formulario fue enviado
if (isset($_POST['register'])) {
    // Validar que todos los campos están llenos
    if (
        !empty($_POST['name']) &&
        !empty($_POST['email']) &&
        !empty($_POST['direction']) &&
        !empty($_POST['phone']) &&
        !empty($_POST['password'])
    ) {
        // Limpiar y validar los datos del formulario
        $name = htmlspecialchars(trim($_POST['name']));
        $email = htmlspecialchars(trim($_POST['email']));
        $direction = htmlspecialchars(trim($_POST['direction']));
        $phone = htmlspecialchars(trim($_POST['phone']));
        $password = password_hash(trim($_POST['password']), PASSWORD_DEFAULT); // Hashear contraseña
        $fecha = date("Y-m-d"); // Fecha en formato estándar para MySQL

        // Verificar si el correo ya está registrado
        $consulta_email = "SELECT * FROM datos WHERE email = ?";
        $stmt_email = $conex->prepare($consulta_email);
        $stmt_email->bind_param("s", $email);
        $stmt_email->execute();
        $resultado_email = $stmt_email->get_result();

        if ($resultado_email->num_rows > 0) {
            echo '<h3 class="error">El correo ya está registrado. Intenta con otro.</h3>';
        } else {
            // Insertar los datos en la base de datos
            $consulta = "INSERT INTO datos (nombre, email, direccion, telefono, contraseña, fecha) 
                         VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $conex->prepare($consulta);

            if ($stmt) {
                $stmt->bind_param("ssssss", $name, $email, $direction, $phone, $password, $fecha);
                $resultado = $stmt->execute();

                if ($resultado) {
                    echo '<h3 class="success">Tu registro se ha completado exitosamente</h3>';
                } else {
                    echo '<h3 class="error">Ocurrió un error al guardar los datos. Intenta de nuevo.</h3>';
                }

                $stmt->close();
            } else {
                echo '<h3 class="error">Error en la preparación de la consulta.</h3>';
            }
        }

        $stmt_email->close(); // Cerrar la consulta de verificación de correo
    } else {
        echo '<h3 class="error">Por favor, completa todos los campos.</h3>';
    }
}

// Cerrar la conexión
$conex->close();
?>
