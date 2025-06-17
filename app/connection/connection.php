<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cuentas_db";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Opcional: establecer el conjunto de caracteres a utf8
$conn->set_charset("utf8");
?>