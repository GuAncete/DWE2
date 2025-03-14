<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
    date_default_timezone_set('America/Sao_Paulo');
    $data = date('d/m/y');
    $hora = date('H:i:s');
    $nome = 'Gustavo';
    echo "<h1>My Firt  PHP page</h1>";
    echo "<p>Hello World!</p>";
    echo "<p>Olá, meu nome é <b>$nome</b>, Hoje é dia <b>$data</b> e agora são <b>$hora</b></p>";
    echo "<hr>";
    echo "<a href='../gustavo.php'>gustavo/</a>"
    ?>
</body>

</html>