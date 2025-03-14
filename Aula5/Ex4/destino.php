<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <style>
        .aprovado { color: green; font-weight: bold; }
        .recuperacao { color: orange; font-weight: bold; }
        .reprovado { color: red; font-weight: bold; }
    </style>
</head>
<body>
    <h1>Resultado da Média</h1>
    <hr>

    <?php
 
        $nota1 = isset($_POST["nota1"]) ? floatval($_POST["nota1"]) : 0;
        $nota2 = isset($_POST["nota2"]) ? floatval($_POST["nota2"]) : 0;
        $nota3 = isset($_POST["nota3"]) ? floatval($_POST["nota3"]) : 0;


        $media = ($nota1 + $nota2 + $nota3) / 3;
        $mediaFormatada = number_format($media, 2);


        if ($media >= 6) {
            $resultado = "APROVADO";
            $classe = "aprovado";
        } elseif ($media >= 4 && $media < 6) {
            $resultado = "DE RECUPERAÇÃO";
            $classe = "recuperacao";
        } else {
            $resultado = "REPROVADO";
            $classe = "reprovado";
        }

       
        echo "<p>Um aluno com as notas $nota1, $nota2 e $nota3 tem uma média igual a $mediaFormatada.</p>";

        echo "<p>Com essa média o aluno está <span class='$classe'>$resultado</span>.</p>";
    ?>

    <br>
    <a href="index.php">Voltar</a>
</body>
</html>
