<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <?php
    $inicio = (int) $_POST['inicio'];
    $final = (int) $_POST['final'];
    $i = (int) $_POST['i'];

    ?>
    <div class="container col-6 mt-5">
        <h1>Contador</h1>
        <hr>
        <h2>Parâmetros Informados:</h2>
        <div class="row">
            <div class="col-12">
                <p>Inicio:<?= $inicio ?></p>
                <p>Final:<?= $final ?></p>
                <p>Incremento:<?= $i ?></p>

            </div>

        </div>

        <?php
        if (isset($_POST['inicio']) && isset($_POST['final']) && isset($_POST['i'])) {

            $resultado = "";
            if ($inicio < $final) {
                // Contagem crescente
                for ($x = $inicio; $x <= $final; $x += $i) {
                    $resultado .= "$x ";
                }
            } else {
                // Contagem decrescente
                for ($x = $inicio; $x >= $final; $x -= $i) {
                    $resultado .= "$x ";
                }
            }
            echo "<p>$resultado</p>";
        }

        ?>
    </div>

</body>

</html>