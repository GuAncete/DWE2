<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/index.css">
    <title>Formulário</title>
</head>
<body>
    <div class="container">
        <h1>Formulário</h1>
        <hr id="corTexto">
        <form id="meuFormulario" action="destino.php" method="post">
            <div class="form-titulo">
                <label for="titulo">Título da página:</label>
                <input type="text" name="titulo" id="titulo">
            </div>
            <div class="form-corpo">
                <label for="corpo">Corpo:</label>
                <textarea name="corpo" id="corpo"></textarea>
            </div>
            <div class="form-corTexto">
                <label for="corTexto">Cor texto:</label>
                <input type="color" name="corTexto" id="corTexto">
            </div>
            <div class="form-urlImagem">
                <label for="urlImagem">URL de uma imagem:</label>
                <input type="text" name="urlImagem" id="urlImagem">
            </div>
            <div class="form-urlLink">
                <label for="urlLink">URL de link:</label>
                <input type="text" name="urlLink" id="urlLink">
            </div>
            <div class="form-corFundo">
                <label for="corFundo">Cor de plano de fundo:</label>
                <input type="color" name="corFundo" id="corFundo">
            </div>
            <div class="form-buttons">
                <button type="submit">Enviar</button>
                <button type="reset">Limpar</button>
            </div>
        </form>
    </div>

    <script>
        document.getElementById('corTexto').addEventListener('input', function() {
            this.style.backgroundColor = this.value;
        });
        document.getElementById('corFundo').addEventListener('input', function() {
            this.style.backgroundColor = this.value;
        });
        document.getElementById('meuFormulario').addEventListener('reset', function() {
            document.getElementById('corTexto').style.backgroundColor = '';
            document.getElementById('corFundo').style.backgroundColor = '';
        });
    </script>
</body>
</html>