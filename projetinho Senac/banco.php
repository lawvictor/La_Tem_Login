<?php
    
    //Conexão com banco de dados
    //Criar o objeto de conexão
    $SERVIDOR = 'localhost';
    $USUARIO  = 'aluno';
    $SENHA    = '123456';
    $BANCO    = 'TI41';

    $nome     = $_GET['txtNome'];
    $senha     = $_GET['txtSenha'];
    $cpf     = $_GET['txtCpf'];
    $email     = $_GET['txtEmail'];
    $avatar     = $_GET['txtAvatar'];
    $rua     = $_GET['txtRua'];
    $bairro     = $_GET['txtBairro'];
    $numero     = $_GET['txtNumero'];
    $cidade     = $_GET['txtCidade'];
    $pais     = $_GET['txtPais'];
    $telefone     = $_GET['txtTelefone'];
    $ddd     = $_GET['txtDdd'];
    $codigoDePais     = $_GET['txtCodigoDePais'];


    $con = new mysqli ($SERVIDOR,$USUARIO,$SENHA,$BANCO);

    //Testar a conexão com o banco de dados

    if ($con->connect_error){
        //Aqui faz o código necessário em caso de erro durante a conexão com o banco de dados
        echo"Erro ao conectar com a base de dados.";
    }else{
        //Aqui a codificação em caso de sucesso na conexão com o banco
        echo "<h3>A conexão com o banco de dados foi realizada</h3>";
    
        $sql = "insert into la_tem.usuario (nome,senha,cpf,email,avatar_fk,rua,
        bairro,numero,cidade,pais,telefone,ddd,codigo_de_pais) values 
        ('$nome','$senha', '$cpf', '$email', '$avatar', '$rua',
         '$bairro', '$numero', '$cidade', '$pais', '$telefone', '$ddd', '$codigoDePais')";
        $ret = $con->query($sql);
        if ( $ret == true){
            header("Location: loginCadastro.php");
        }


        $con->Close();
    }
    
    
    
    





?>