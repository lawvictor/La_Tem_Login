<?php
    session_start();

    if ($_SESSION['token'] != 'ABCDEF') {
        header("Location: loginCadastro.php");
    }

    echo "<html>";
        echo"<h1>Você está logado.</h1>";
?>


