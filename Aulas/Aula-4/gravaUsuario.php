<html>

<head>
    <title>Aula PHP</title>
</head>

<body>

    <h1>Cadastro de Usuários</h1>
    <a href="usuarios.php">voltar</a>

    <?php

    include "conexao.php";

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $verifica = mysqli_query($conn, "select * from usuarios where usuario='" . $usuario . "'");
    $conta = mysqli_num_rows($verifica);

    if ($conta == 0) {

        $resultado = mysqli_query($conn, "insert into usuarios (nome, email, telefone, usuario, senha) values ('" . $nome . "', '" . $email . "', '" . $telefone . "', '" . $usuario . "', password('" . $senha . "'))");

        if ($resultado == 1) {
            echo "<br><br><font color='#069806'>Usuário cadastrado com sucesso!</font>";
        } else {
            echo "<br><br><font color='#C00000'>Usuário não pode ser cadastrado!</font>";
        }
    } else {
        echo "<br><br><font color='#C00000'>Usuário já existe!</font>";
    }


    ?>

</body>

</html>