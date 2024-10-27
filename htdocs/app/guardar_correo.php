<?php

// Configura tus credenciales de base de datos
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "suscripciones"; 

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Procesar el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email']; 

    // Preparar y vincular
    $stmt = $conn->prepare("INSERT INTO correos (email) VALUES (?)");
    $stmt->bind_param("s", $email); 

    // Ejecutar la consulta
    if ($stmt->execute()) {
        echo "Nuevo registro creado exitosamente";
    } else {
        echo "Error: " . $stmt->error;
    }
}
$conn->close();
?>
