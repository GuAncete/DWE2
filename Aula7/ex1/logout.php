<?php
session_start();
session_destroy();
header("Location: entrar.php"); // Redireciona para a página de login
exit;
?>
