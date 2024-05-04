<html>

<head>
    <title>Aula PHP</title>
</head>

<body>

    <h1>Cadastro de Usuários</h1>
    <a href="usuarios.php">voltar</a>

    <?php

    include "conexao.php";

    $codigo = $_GET['id'];
    $nome = "";

    $resultado = mysqli_query($conn, "select * from usuarios where codusuario=" . $codigo);
    $nregistro = mysqli_num_rows($resultado);

    for ($i = 0; $i < $nregistro; $i++) {
        $registro = mysqli_fetch_assoc($resultado);
        $nome = $registro['nome'];
    }

    ?>

    <center>
        Você realmente deseja excluir o usuário [ <?php echo $nome ?> ]?
    <br>
    <a href="delUsuario.php?id=<?php echo $codigo ?>&a=s">Sim</a> |
    <a href="usuarios.php">Não</a>
    </center>

    <?php

    $acao = "";

    if (isset($_GET['a'])) {
        $acao = "sim";
    }

    if ($acao == "sim") {
        $delete = mysqli_query($conn, "delete from usuarios where codusuario=" . $codigo);

        if ($delete == 1) {
            echo "<br><br><font color='#069806'>Usuário excluído com sucesso!";
        } else {
            echo "<br><br><font color='#C00000'>Usuário não pode ser excluído!";
        }
    }
    ?>

</body>

</html>