<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    th, tr{
        border:solid 5px;
        
    }
</style>
<body>
    <div class="container mt-3">
        <h1>Tabuada</h1>
        <hr>
        <div class="row">
            <div class="col-6">
                <form method="GET">
                    <div class="row mb-3">
                        <div class="col-4">
                            <label for="linha" class="form-label">Linha:</label>
                            <input type="number" name="linha" class="form-control" id="linha" required>
                        </div>
                        <div class="col-4">
                            <label for="coluna" class="form-label">Coluna:</label>
                            <input type="number" name="coluna" class="form-control" id="coluna" required>
                        </div>
                        <div class="col-4">
                            <label for="estilo" class="form-label">Estilo:</label>
                            <select name="estilo" id="estilo" class="form-control">
                                <option value="table-primary">Azul</option>
                                <option value="table-success">Verde</option>
                                <option value="table-danger">Vermelho</option>
                                <option value="table-warning">Amarelo</option>
                                <option value="table-info">Ciano</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Gerar Tabela</button>
                    <a href="?" class="btn btn-secondary">Limpar</a>
                </form>
            </div>
        </div>
        <hr>
        <br>

        <?php
        if (isset($_GET['linha'], $_GET['coluna'], $_GET['estilo'])) {
            $linha = intval($_GET['linha']);
            $coluna = intval($_GET['coluna']);
            $estilo = htmlspecialchars($_GET['estilo']);

            if ($linha > 0 && $coluna > 0) {
                echo "<table class='table $estilo'>";
                for ($i = 0; $i < $linha; $i++) {
                    echo "<tr>";
                    for ($j = 0; $j < $coluna; $j++) {
                        echo "<th>teste</th>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "<p class='text-danger'>Defina valores válidos para linha e coluna.</p>";
            }
        }
        ?>
    </div>
</body>

</html>
