<?php
session_start();
require '../backend/db.php';

$tables = ['3em_portugues', '3em_pro_textual', '8ef_portugues', '9ef_redacao'];

// Função para excluir um arquivo do banco e do sistema
function deleteFile($conn, $table, $delete_id) {
    // Buscar o caminho do arquivo
    $query = $conn->prepare("SELECT path FROM $table WHERE id = ?");
    $query->bind_param("i", $delete_id);
    $query->execute();
    $result = $query->get_result();

    if ($result->num_rows > 0) {
        $file = $result->fetch_assoc();
        $file_path = $file['path'];

        // Apagar o arquivo do sistema
        if (file_exists($file_path) && unlink($file_path)) {
            // Apagar o registro do banco
            $delete_query = $conn->prepare("DELETE FROM $table WHERE id = ?");
            $delete_query->bind_param("i", $delete_id);
            $delete_query->execute();

            if ($delete_query->affected_rows > 0) {
                $_SESSION['success_message'] = "Arquivo e registro apagados com sucesso da tabela $table.";
            } else {
                $_SESSION['error_message'] = "Erro ao apagar o registro do banco de dados.";
            }
        } else {
            $_SESSION['error_message'] = "Erro ao apagar o arquivo ou arquivo não encontrado.";
        }
    } else {
        $_SESSION['error_message'] = "Registro não encontrado na tabela $table.";
    }
}

// Verifica se foi enviado um ID para exclusão
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_id']) && isset($_POST['table'])) {
    $delete_id = intval($_POST['delete_id']);
    $table = $_POST['table'];

    // Verifica se a tabela é válida
    if (in_array($table, $tables)) {
        deleteFile($conn, $table, $delete_id);
    } else {
        $_SESSION['error_message'] = "Tabela inválida.";
    }

    header("Location: upload.php");
    exit();
}

// Exibe mensagens de erro
if (isset($_SESSION['error_message'])) {
    echo "<p class='info-texto erro'>" . $_SESSION['error_message'] . "</p>";
    unset($_SESSION['error_message']);
}

// Exibe mensagens de sucesso
if (isset($_SESSION['success_message'])) {
    echo "<p class='info-texto sucesso'>" . $_SESSION['success_message'] . "</p>";
    unset($_SESSION['success_message']);
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de Arquivos</title>
    <link rel="stylesheet" href="../css/painel.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="info-caixa"></header>
    <main id="painel_de_controle">
        <div id="form_upload">
            <h1>painel de upload</h1>
            <form action="../backend/upload.php" method="post" enctype="multipart/form-data">
                <div class="campo_nome_do_arquivo">
                    <input type="text" name="name" id="name" required>
                    <label for="name" class="nome__titulo">Nome do Arquivo</label>
                </div>
                <label for="table"></label>
                <select name="table" id="table">
                    <option value=""  selected disabled>Selecione uma Turma</option>
                    <option value="3em_portugues">3º Ensino Medio - Português</option>
                    <!-- <option value="3em_pro_textual">3º Ensino Medio - Produção Textual</option> -->
                    <option value="9ef_redacao">9º Ensino Fundamental - Redação</option>
                    <option value="8ef_portugues">8º Ensino Fundamental - Português</option>
                </select>
                <label for="file" class="botao-adicionar-arquivo">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="16"  height="16"  viewBox="0 0 24 24"  fill="none"  stroke="#581ae8"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-upload"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" /><path d="M7 9l5 -5l5 5" /><path d="M12 4l0 12" /></svg>
                    Adicionar Arquivo
                </label>
                <input type="file" name="file" id="file" required class="entrada-arquivo-escondida">
                <span id="nome-arquivo" class="nome-do-arquivo"></span>
                <input type="submit" value="Enviar">
            </form>
        </div>
        <div id="tabela">
            <h1>Lista de Arquivos</h1>
            <?php foreach ($tables as $table): ?>
                <h2><?= ucfirst($table) ?></h2>
                <table>
                    <thead>
                        <tr>
                            <th>Ordem</th>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Arquivo</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $result = $conn->query("SELECT id, nome, path FROM $table");
                        if ($result->num_rows > 0):
                            $ordem = 1;
                            while ($row = $result->fetch_assoc()): ?>
                                <tr>
                                    <td><?= $ordem++ ?></td>
                                    <td><?= htmlspecialchars($row['id']) ?></td>
                                    <td><?= htmlspecialchars($row['nome']) ?></td>
                                    <td><?= htmlspecialchars($row['path']) ?></td>
                                    <td>
                                        <form method="POST" style="display: inline;">
                                            <input type="hidden" name="delete_id" value="<?= $row['id'] ?>">
                                            <input type="hidden" name="table" value="<?= $table ?>">
                                            <button type="submit" class="delete-button">Apagar</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="5">Nenhum arquivo encontrado na tabela <?= $table ?>.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            <?php endforeach; ?>
        </div>
    </main>

    <script>
        // Adiciona um listener para exibir o nome do arquivo selecionado
        document.getElementById('file').addEventListener('change', function() {
            var nomeArquivo = this.files[0] ? this.files[0].name : "Nenhum arquivo selecionado";
            document.getElementById('nome-arquivo').textContent = nomeArquivo;
        });
    </script>
</body>

</html>