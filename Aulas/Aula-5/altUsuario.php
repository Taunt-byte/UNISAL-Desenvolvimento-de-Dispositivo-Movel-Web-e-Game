<html>

<head>
    <title>Aula PHP</title>

    <script src="js/funcoes.js"></script>
</head>

<body>

    <?php
    include 'validaSessao.php';
    ?>

    <h1>Cadastro de Usuários</h1>
    <a href="usuarios.php">voltar</a>

    <form name="formUsuario" method="POST" action="gravaUsuario.php?action=a">

        <?php

        $id = $_GET['id'];
        $codigo = "";
        $nome = "";
        $email = "";
        $telefone = "";
        $usuario = "";

        include 'conexao.php';

        $resultado = mysqli_query($conn, "select * from usuarios where codusuario=" . $id);
        $nregistro = mysqli_num_rows($resultado);

        for ($i = 0; $i < $nregistro; $i++) {
            $registro = mysqli_fetch_assoc($resultado);
            $codigo = $registro['codusuario'];
            $nome = $registro['nome'];
            $email = $registro['email'];
            $telefone = $registro['telefone'];
            $usuario = $registro['usuario'];
        }

        ?>

        <p>
            Código:<br>
            <input type="text" name="codigo" readonly value="<?php echo ($codigo); ?>">
        </p>

        <p>
            Nome:<br>
            <input type="text" name="nome" value="<?php echo ($nome); ?>">
        </p>

        <p>
            E-mail:<br>
            <input type="text" name="email" value="<?php echo ($email); ?>">
        </p>

        <p>
            Telefone:<br>
            <input type="text" name="telefone" value="<?php echo ($telefone); ?>">
        </p>

        <p>
            Usuário:<br>
            <input type="text" name="usuario" readonly value="<?php echo ($usuario); ?>">
        </p>

        <p>
            <input type="submit" name="Gravar">
        </p>

        <span id="erros_form"></span>

    </form>

</body>

</html>