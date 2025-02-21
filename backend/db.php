<?php
$host = 'localhost';
$user = 'root';
$password = 'mysql';
$dbname = 'portal_educacional';

// Conexão com o banco
$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
