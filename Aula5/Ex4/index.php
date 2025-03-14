<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/index.css">
    <title>Calculadora de Média</title>
</head>
<body>
    <h1>Praticando - Calculadora de Média</h1>
    <hr>
    <form method="POST" id="meuFormulario">
        <div class="mainContainer">
            <div class="container">
                <label>Nota 1:</label>
                <input type="number" id="nota1" name="nota1" step="0.1" required>
            </div>
            <div class="container2">
                <label>Nota 2:</label>
                <input type="number" id="nota2" name="nota2" step="0.1" required>
            </div>
            <div class="container3">
                <label>Nota 3:</label>
                <input type="number" id="nota3" name="nota3" step="0.1" required>
            </div>
        </div>
        <br>
        <!-- Alterei o tipo do botão para "button" e adicionei o preventDefault no JavaScript -->
        <button type="button" class="botaoC" onclick="enviarMédia(event)">Calcular Média</button>
        <button type="button" class="botaoL" onclick="limparFormulario()">Limpar</button>
    </form>
    <script src="script/script.js"></script>
</body>
</html>
