<?php
    $titulo   = $_POST["titulo"];
    $corpo    = $_POST["corpo"];
    $corTexto = $_POST["corTexto"];
    $imagemUrl= $_POST["urlImagem"];
    $linkUrl  = $_POST["urlLink"];
    $corFundo = $_POST["corFundo"];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <style>
       body {
            background-color: <?php echo $corFundo; ?>;
            color: <?php echo $corTexto; ?>;
       }
       h1 {
            font-size: 28px;
            font-weight: bold;
       }
       hr {
            border: 0.1px solid <?php echo $corTexto; ?>; 
       }
    </style>
</head>
<body>
    <?php echo "<h1>$titulo</h1>"; ?>
    <hr>
    <?php echo "<p>$corpo</p>"; ?>
    <div>
        <?php echo "<img src='$imagemUrl' alt='Imagem IFSP' class='img-fluid mt-3'>"; ?>
    </div>
    <p>
        <?php echo "<a href='$linkUrl' target='_blank' class='text-primary'>$linkUrl</a>"; ?>
    </p>
</body>
</html>
