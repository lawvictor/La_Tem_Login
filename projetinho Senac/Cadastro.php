
<html>
    <h1>Cadastro de novos usuários</h1>
    <hr />
    <!-- Para entrada de dados podemos utilizar um formulário -->
    <form action = "banco.php" >
        <label>Nome</label>
        <input type = "text" name = "txtNome" />
        <br>
        <label>Senha</label>
        <input type = "text" name = "txtSenha" />
        <br>
        <label>CPF</label>
        <input type = "text" name = "txtCpf" />
        <br>
        <label>Email</label>
        <input type = "email" name = "txtEmail" />
        <br>
        <label>Chave Foreign Key Avatar</label>
        <input type = "number" name = "txtAvatar" />
        <br>
        <label>Rua</label>
        <input type = "text" name = "txtRua" />
        <br>
        <label>Bairro</label>
        <input type = "text" name = "txtBairro" />
        <br>
        <label>Número</label>
        <input type = "text" name = "txtNumero" />
        <br>
        <label>Cidade</label>
        <input type = "text" name = "txtCidade" />
        <br>
        <label>País</label>
        <input type = "text" name = "txtPais" />
        <br>
        <label>Telefone</label>
        <input type = "number" name = "txtTelefone" />
        <br>
        <label>DDD</label>
        <input type = "text" name = "txtDdd" />
        <br>
        <label>Código de País</label>
        <input type = "text" name = "txtCodigoDePais" />
        <br>
        <input type = "submit" value = "Enviar" />

</form>
</html>