<html>

<head>
    <title>Aula PHP</title>

    <script src="js/funcoes.js"></script>
</head>

<body>

    <h1>Cadastro de Usuários</h1>
    <a href="usuarios.php">voltar</a>

    <form name="formUsuario" method="POST" onsubmit="return validaFormUsuario();" action="gravaUsuario.php">
    
    <p>
        Nome:<br>
        <input type="text" name="nome">
    </p>

    <p>
        E-mail:<br>
        <input type="text" name="email">
    </p>

    <p>
        Telefone:<br>
        <input type="text" name="telefone">
    </p>    

    <p>
        Usuário:<br>
        <input type="text" name="usuario">
    </p>

    <p>
        Senha:<br>
        <input type="password" name="senha">
    </p>

    <p>
        <input type="submit" name="Gravar">
    </p>   

    <span id="erros_form"></span>

    </form>

</body>
</html>