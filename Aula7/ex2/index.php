<?php
session_start(); // Inicia a sessão

// Obtém os valores da URL ou mantém os da sessão
$nome = filter_input(INPUT_GET, "nome", FILTER_SANITIZE_SPECIAL_CHARS) ?? $_SESSION['nome'] ?? "";
$email = filter_input(INPUT_GET, "email", FILTER_SANITIZE_EMAIL) ?? $_SESSION['email'] ?? "";
$color = filter_input(INPUT_GET, "cor", FILTER_SANITIZE_SPECIAL_CHARS) ?? $_SESSION['cor'] ?? "FFFFFF";

// Salva os valores na sessão
$_SESSION['nome'] = $nome;
$_SESSION['email'] = $email;
$_SESSION['cor'] = $color;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/index.css">
    <title>Destino Get</title>
    <style>
        body {
            background-color: <?php echo "#" . $color; ?>;
        }
    </style>
</head>
<body>
    <h1>Destino Get</h1>
    <hr>
    <?php
    echo "Nome informado: " .  $nome;
    echo "<br>";
    echo "Email: " .  $email;
    echo "<br>";
    ?>

    <a href="index.php?nome=Gustavo&email=Gustavo@gmail.com&cor=<?php echo $color; ?>">[nome = Gustavo | email = Gustavo@gmail.com]</a><br>
    <a href="index.php?nome=Pedro&email=Pedro@gmail.com&cor=<?php echo $color; ?>">[nome = Pedro | email = Pedro@gmail.com]</a><br>
    <a href="limpar_sessao.php">Limpar tudo</a><br>

    <div class="imagemColor">
        <a href="index.php?nome=<?php echo $nome; ?>&email=<?php echo $email; ?>&cor=FF0000">
            <img src="https://imgs.search.brave.com/WLqjNuWyHlY27crrIPTO23RCwNoE2jZbTGw5FvcOM6U/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9hYm91/dC5jYW52YS5jb20v/d3AtY29udGVudC91/cGxvYWRzL3NpdGVz/LzgvMjAxOS8wMy9y/ZWQucG5n" alt="">
        </a>
        <a href="index.php?nome=<?php echo $nome; ?>&email=<?php echo $email; ?>&cor=ADD8E6">
            <img src="https://imgs.search.brave.com/_CnjaGgELbo_r28JBe9chDQKkXRGcVodgog5OmLYL8E/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9hYm91/dC5jYW52YS5jb20v/d3AtY29udGVudC91/cGxvYWRzL3NpdGVz/LzgvMjAxOS8wNS9s/aWdodC1ibHVlLnBu/Zw" alt="">
        </a>
        <a href="index.php?nome=<?php echo $nome; ?>&email=<?php echo $email; ?>&cor=FF007F">
            <img src="https://imgs.search.brave.com/0GNKyD8vuYJQyQEyj9pHb6RWt64J7AkfDbHiVghrcag/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9hYm91/dC5jYW52YS5jb20v/d3AtY29udGVudC91/cGxvYWRzL3NpdGVz/LzgvMjAxOS8wNC9y/b3NlLnBuZw" alt="">
        </a>
    </div>
</body>
</html>
