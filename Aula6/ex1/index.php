<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-3">
        <h1>Tabuada</h1>
        <hr>
        <div class="row">
            <div class="col-6">
                <form method="GET">
                    <div class="row mb-3">
                        <label for="numero" class="col-sm-2 col-form-label">Número:</label>
                        <div class="col-sm-10">
                            <input type="number" name="numero" class="form-control" id="numero">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <button type="cancel" class="btn btn-primary">Limpar</button>
                </form>
            </div>
        </div>
        <hr>
        <br>
        <?php
        if (isset($_GET['numero'])) {
            $numero = htmlspecialchars($_GET['numero']);
        ?><h2>Tabuada do <?= $_GET['numero'] ?></h2>
        <?php

            $i = 0;
            while ($i <= 10) {
                echo "<p>$i X $numero = " . ($i * $numero) . "</p>";
                $i++;
            }
        }
        ?>
    </div>



</body>

</html>