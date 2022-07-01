<?php
    //Conexão com banco de dados
    //Criar o objeto de conexão
    $SERVIDOR   = 'localhost';
    $USUARIO    = 'aluno';
    $SENHA      = '123456';
    $BANCO      = 'la_tem';

    $con = new mysqli ($SERVIDOR,$USUARIO,$SENHA,$BANCO);

    $userEmail      = $_GET['txtUserEmail'];
    $senha      = $_GET['txtSenha'];

    

        $sql = "select * from la_tem.usuario where email = '$userEmail' and senha = '$senha';";
        $ret = $con -> query($sql);

    while ($registro = $ret->fetch_assoc()) {

        if ($userEmail == $registro['email'] && $senha == $registro['senha']) {
            session_start();
            $_SESSION['user'] = $userEmail;
            $_SESSION['token'] = "ABCDEF";
            header("Location: usuarioLogado.php?");
        } else {
            header("Location: loginCadastro.php?erro=0");
        }
    }         
?>