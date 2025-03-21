<?php
session_start(); // Inicia a sessão
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <span class="fs-4">Simple header</span>
            </a>

            <ul class="nav nav-pills">
                <li class="nav-item"><a href="inicio.php" class="nav-link">Início</a></li>
                <li class="nav-item"><a href="sobre.php" class="nav-link">Sobre</a></li>
                <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
                <li class="nav-item"><a href="contato.php" class="nav-link">Contato</a></li>

                <?php if (isset($_SESSION['nome'])): ?>
                    <li class="nav-item"><a href="perfil.php" class="nav-link">Perfil</a></li>
                    <li class="nav-item"><a href="logout.php" class="nav-link btn btn-danger text-red">Sair</a></li>
                <?php else: ?>
                    <li class="nav-item"><a href="entrar.php" class="nav-link active" aria-current="page">Entrar</a></li>
                <?php endif; ?>
            </ul>
        </header>
    </div>
</body>

</html>
