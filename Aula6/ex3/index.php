<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<style>
    .verde{
        background-color: greenyellow;
        border: 3px;
        border-color: green;
        background-size: 3vh;
    }

    .vermelho{
        background-color: red;
        border: 3px;
        border-color: royalblue;
        padding: 5vh;
    }
</style>
<body>
    <div class="container mt-3">
        <h1>Números Primos</h1>
        <hr>
        <div class="d-flex flex-row justify-content-around">
            <a href="?numero=1">Numero 1</a>
            <a href="?numero=2">Numero 2</a>
            <a href="?numero=3">Numero 3</a>
            <a href="?numero=5">Numero 5</a>
            <a href="?numero=20">Numero 20</a>
            <a href="?numero=32">Numero 32</a>
            <a href="?numero=37">Numero 37</a>
        </div>
        <div class="d-flex flex-column align-itens-center mt-5">
            <?php
            if (isset($_GET['numero'])) {
                $numero = (int) $_GET['numero'];

                if ($numero < 2) {
            ?>
                    <p style="font-size: 30px;"><span class="verde"><?= $numero ?></span> <span class="verde">não é</span> um número <span class="verde">primo</span>.</p>
                    <?php
                } else {
                    $ehPrimo = true;
                    for ($i = 2; $i <= sqrt($numero); $i++) {
                        if ($numero % $i == 0) {
                            $ehPrimo = false;
                            break;
                        }
                    }

                    if ($ehPrimo) {
                    ?>
                        <p style="font-size: 30px;"><span class="verde"><?= $numero ?></span> <span class="verde">é</span> um número <span class="verde">primo</span>.</p>
                    <?php
                    } else {
                    ?>
                        <p style="font-size: 30px;"><span class="vermelho"><?= $numero ?></span> <span class="vermelho">não é</span> um número <span class="vermelho">primo</span>.</p>
                    <?php
                    }
                }

                if ($numero % 2 == 0) {
                    ?>
                    <p style="font-size: 30px;">Além disso, ele é um número <span class="vermelho">PAR</span>.</p>
                <?php
                } else {
                ?>
                    <p style="font-size: 30px;">Além disso, ele é um número <span class="verde">ÍMPAR</span>.</p>
                <?php
                }
            } else {
                ?>
            <?php
            }
            ?>
        </div>
    </div>
</body>

</html>