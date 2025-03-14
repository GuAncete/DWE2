<?php
include 'topo.php';

// Verifica se os dados foram enviados via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $mensagem = trim($_POST['mensagem']);
    $hoje = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));

    $timestamp = $hoje->format('Ymd_His'); 
    $nome_arquivo = "contatos/dados_formulario_$timestamp.txt";

    $arquivo = fopen($nome_arquivo, "w+");

    if ($arquivo) {
        fwrite($arquivo, "Nome: $nome\n");
        fwrite($arquivo, "Email: $email\n");
        fwrite($arquivo, "Mensagem: $mensagem\n");
        fwrite($arquivo, "Data de Envio: " . $hoje->format('d/m/Y H:i:s') . "\n");
        fwrite($arquivo, "------------------------\n");

        fclose($arquivo);

        $mensagem_sucesso = "Dados salvos com sucesso no arquivo <strong>$nome_arquivo</strong>!";
    } else {
        $mensagem_sucesso = "Erro ao criar o arquivo.";
    }
} else {
    header("Location: contato.php");
    exit();
}
?>

<div class="container mt-5">
    <h1>Formulário para Contato</h1>
    <p><strong>Nome Informado:</strong> <?= htmlspecialchars($nome) ?></p>
    <p><strong>Email:</strong> <?= htmlspecialchars($email) ?></p>
    <p><strong>Mensagem:</strong> <?= nl2br(htmlspecialchars($mensagem)) ?></p>
    <p><strong>Data:</strong> <?= $hoje->format('d/m/Y H:i:s') ?></p>

    <p class="text-success"><?= $mensagem_sucesso ?></p>

    <!-- Botão para voltar -->
    <a href="contato.php" class="btn btn-primary">Voltar</a>
</div>

<?php
include 'rodape.php';
?>
