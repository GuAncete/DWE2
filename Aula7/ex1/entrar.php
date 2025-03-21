<?php
require_once "topo.php";

    if(isset($_SESSION["nome"]) && !empty($_SESSION["nome"])){
    $_SESSION["erro"] = "Usuário já está autenticado.";
    header("Location: inicio.php");
}
?>

<div class="container col-md-6 col-lg-4 mt-5 p-4 bg-light rounded shadow">
    <div class="text-center mb-3">
        <h1 class="fw-bold">Autenticação</h1>
    </div>
    <form action="autenticar.php" method="POST">

        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" id="nome" name="nome" class="form-control">
        </div>

        <div class="mb-3">
            <label for="senha" class="form-label">Senha:</label>
            <input type="password" id="senha" name="senha" class="form-control">
        </div>

        <button class="btn btn-primary w-100" type="submit">Entrar</button>
    </form>
</div>

<?php
require_once "rodape.php";
