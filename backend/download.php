<?php
require 'db.php';

$allowedTables = ['3em_portugues', '3em_pro_textual', '8ef_portugues', '9ef_redacao'];

if (isset($_GET['id']) && isset($_GET['table'])) {
    $id = intval($_GET['id']); // Converte para número para evitar injeção
    $table = $_GET['table'];

    // Verifica se a tabela fornecida é válida
    if (!in_array($table, $allowedTables)) {
        die('Tabela inválida.');
    }

    // Busca o arquivo no banco de dados
    $stmt = $conn->prepare("SELECT path FROM $table WHERE id = ?");
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $stmt->bind_result($filePath);
    $stmt->fetch();
    $stmt->close();

    // Verifica se o arquivo existe
    if (!empty($filePath) && file_exists($filePath)) {
        // Força o download do arquivo
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($filePath) . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filePath));
        readfile($filePath);
        exit;
    } else {
        echo "Arquivo não encontrado.";
    }
} else {
    echo "Parâmetros inválidos.";
}

$conn->close();
?>
