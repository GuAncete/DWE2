<?php
    $nome = filter_input(INPUT_GET, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_GET, "email", FILTER_SANITIZE_EMAIL);
    $color = filter_input(INPUT_GET, "cor", FILTER_SANITIZE_SPECIAL_CHARS);
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/index.css">
    <title>Document</title>
    <style>
       
        body{
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

    
    <a href="<?php echo 'index.php?nome=Gustavo&email=Gustavo@gmail.com&cor=' . $color?>">[nome = Gustavo|email = Gustavo@gmail.com]</a><br>
    <a href="<?php echo 'index.php?nome=Pedro&email=Pedro@gmail.com&cor=' . $color?>">[nome = Pedro|email=Pedro@gmail.com]</a><br>
    <a href="index.php">Limpar tudo</a><br>

    <div class="imagemColor">
        <a href="<?php echo 'index.php?nome=' . $nome . '&email='. $email . '&cor=FF0000'?>"><img src="https://imgs.search.brave.com/WLqjNuWyHlY27crrIPTO23RCwNoE2jZbTGw5FvcOM6U/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9hYm91/dC5jYW52YS5jb20v/d3AtY29udGVudC91/cGxvYWRzL3NpdGVz/LzgvMjAxOS8wMy9y/ZWQucG5n" alt=""></a>
        <a href="<?php echo 'index.php?nome=' . $nome . '&email='. $email . '&cor=ADD8E6'?>"><img src="https://imgs.search.brave.com/_CnjaGgELbo_r28JBe9chDQKkXRGcVodgog5OmLYL8E/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9hYm91/dC5jYW52YS5jb20v/d3AtY29udGVudC91/cGxvYWRzL3NpdGVz/LzgvMjAxOS8wNS9s/aWdodC1ibHVlLnBu/Zw" alt=""></a>
        <a href="<?php echo 'index.php?nome=' . $nome . '&email='. $email . '&cor=FF007F'?>"><img src="https://imgs.search.brave.com/0GNKyD8vuYJQyQEyj9pHb6RWt64J7AkfDbHiVghrcag/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9hYm91/dC5jYW52YS5jb20v/d3AtY29udGVudC91/cGxvYWRzL3NpdGVz/LzgvMjAxOS8wNC9y/b3NlLnBuZw" alt=""></a>
    </div>
</body>
</html>