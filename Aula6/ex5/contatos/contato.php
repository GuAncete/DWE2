<?php
include 'topo.php';
?>
<div class="container mt-5">
    <form class="p-4 shadow rounded bg-light" method="POST" action="destino.php">
        <h1>Formulário de Contato</h1>
        <div class="row mb-3 align-items-center">
            <div class="col-md-6">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome">
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email">
            </div>
        </div>

        <div class="mb-3">
            <label for="mensagem" class="form-label">Mensagem</label>
            <textarea name="mensagem" id="mensagem" class="form-control" rows="4" placeholder="Digite sua mensagem"></textarea>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary px-4">Enviar</button>
            <button type="cancel" class="btn btn-primary px-4">limpar</button>
        </div>
    </form>
</div>

<?php

include 'rodape.php';
