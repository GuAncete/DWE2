<?php
include 'topo.php';
?>

<div class="container mt-5 text-center">
    <h1>Bem-vindo ao Nosso Site!</h1>
    <p>Este é um espaço onde você pode encontrar diversas informações e interagir com nossos serviços.</p>
    <p>Fique à vontade para explorar as seções do site e entrar em contato conosco caso tenha dúvidas.</p>

    <a href="contato.php" class="btn btn-primary mt-3">Entre em Contato</a>

    <?php
    if (isset($_SESSION["erro"]) && !empty($_SESSION["erro"])) {
    ?>
    <div class="alert alert-warning" role="alert"> 
        <?=$_SESSION["erro"]?>
    </div>

    <?php
    unset($_SESSION["erro"]);
    }
    ?>
</div>

<?php
include 'rodape.php';
?>