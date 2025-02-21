<?php
session_start();
require 'db.php';

$allowedTables = ['3em_portugues', '3em_pro_textual', '8ef_portugues', '9ef_redacao'];
$maxFileSize = 15 * 1024 * 1024;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $file = $_FILES['file'];
    $table = $_POST['table'] ?? '3em_portugues';

    // Verificação dos campos
    if (!in_array($table, $allowedTables)) {
        $_SESSION['error_message'] = 'Tabela inválida.';
        header("Location: ../pages/upload.php");
        exit();
    }

    if (empty($name) || empty($file['name'])) {
        $_SESSION['error_message'] = 'Nome ou arquivo não fornecido.';
        header("Location: ../pages/upload.php");
        exit();
    }

    if ($file['size'] > $maxFileSize) {
        $_SESSION['error_message'] = 'O arquivo é muito grande. O tamanho máximo permitido é 15MB.';
        header("Location: ../pages/upload.php");
        exit();
    }

    // Define o diretório de upload
    $uploadDir = '../uploads/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // Obter o nome, o caminho completo e a extensão do arquivo
    $fileName = basename($file['name']);
    $filePath = $uploadDir . $fileName;
    $fileType = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));

    // Tipos de arquivos não permitidos
    $disallowedExtensions = ['mp4', 'exe'];
    if (in_array($fileType, $disallowedExtensions)) {
        $_SESSION['error_message'] = 'Tipo de arquivo não permitido. Arquivos .mp4 e .exe são proibidos.';
        header("Location: ../pages/upload.php");
        exit();
    }

    // Evitar sobrescrita de arquivos
    $counter = 1;
    while (file_exists($filePath)) {
        $filePath = $uploadDir . pathinfo($fileName, PATHINFO_FILENAME) . "_$counter." . $fileType;
        $counter++;
    }

    // Move o arquivo para o diretório de uploads
    if (move_uploaded_file($file['tmp_name'], $filePath)) {
        $stmt = $conn->prepare("INSERT INTO $table (nome, path) VALUES (?, ?)");
        $stmt->bind_param('ss', $name, $filePath);

        if ($stmt->execute()) {
            $_SESSION['success_message'] = "Arquivo enviado com sucesso para a tabela $table!";
        } else {
            $_SESSION['error_message'] = "Erro ao salvar no banco de dados.";
        }
        $stmt->close();
    } else {
        $_SESSION['error_message'] = "Erro ao fazer upload do arquivo.";
    }

    header("Location: ../pages/upload.php");
    exit();
}

$conn->close();
?>