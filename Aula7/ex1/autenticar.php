<?php
require_once "topo.php";
extract($_POST);

if($nome=="Gustavo"){
    if($senha == "123"){
        $_SESSION["nome"] = $nome;
        header("Location: inicio.php");
    }else{
        unset($_SESSION["nome"]);
        $erro = "senha";
        require_once "erro.php";
    }
} else {
    unset($_SESSION["nome"]);
    $erro = "Nome";
    require_once "erro.php";
}

?>



<?php
require_once "rodape.php";