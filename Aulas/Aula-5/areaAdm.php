<html>

<head>
    <title>Aula PHP</title>

</head>

<body>

        <?php

        include 'validaSessao.php';

        $usuarioLogado = $_SESSION['usuario'];

        ?>

        <h1>Área Admin</h1>
        <br>
        Seja bem vindo <?php echo $usuarioLogado; ?> | <a href="sair.php">Sair</a>

        <br><br><br>

        <b>Menu</b><br>
        <a href="usuarios.php">Cadastro de Usuários</a>


</body>

</html>