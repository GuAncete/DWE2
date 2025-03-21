<?php
require_once "topo.php";

    if(!isset($_SESSION["nome"]) || empty($_SESSION["nome"])){
    $_SESSION["erro"] = "Você está tentando acessar conteúdo restrito.";
    header("Location: inicio.php");
}
?>

<div class="container col-md-6 col-lg-4 mt-5 p-4 bg-light rounded shadow">
    <div class="text-center mb-3">
        <h1 class="fw-bold">Perfil</h1>
    </div>
    <form action="autenticar.php" method="POST">

        <div class="mb-3">
            <label for="nome" class="form-label">Nome: <b>Gustavo Ancete</b></label>
        </div>

        <div class="mb-3">
            <label for="senha" class="form-label">E-mail: <b>gustavo@gmail.com</b> </label>
        </div>
        <div class="mb-3">
            <label for="senha" class="form-label">Telefone: <b>(17) 33434-4970</b> </label>
        </div>
        <div class="mb-3">
            <label for="senha" class="form-label">Endereço: <b>rua tal de tal</b> </label>
        </div>
        <div class="mb-3">
            <label for="senha" class="form-label">Cidade: <b>Mirassol</b> </label>
        </div>
        <div class="mb-3">
            <label for="senha" class="form-label">Estado: <b>SP</b> </label>
        </div>

    </form>
</div>

<?php
require_once "rodape.php";
