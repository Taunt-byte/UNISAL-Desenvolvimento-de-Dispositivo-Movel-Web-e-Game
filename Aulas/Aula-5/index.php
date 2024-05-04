<html>

<head>
    <title>Aula PHP</title>

</head>

<body>

    <center>

        <h1>Sistema de Autenticação</h1>
        <br>
        <br>

        <form name="formAutentica" method="POST" action="index.php">

            <p>Usuário<br>
                <input type="text" name="usuario">
            </p>

            <p>Senha<br>
                <input type="password" name="senha">
            </p>

            <p>
                <input type="submit" value="Entrar" name="entrar">
            </p>

        </form>

    </center>

    <?php

    include 'conexao.php';

    if(isset($_POST['entrar'])){

        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        $sql = mysqli_query($conn, "select * from usuarios where usuario='".$usuario."' and senha=password('".$senha."')");
        $nlinha = mysqli_num_rows($sql);

        if ($nlinha == 0) {
            echo ("Usuário ou senha inválido(s)!");
        } else {
            session_start();
            $_SESSION['logado'] = "warnerBrezolin";

            //Retorna nome do usuário logado na Sessão
            for ($i = 0; $i < $nlinha; $i++) {
                $registro = mysqli_fetch_assoc($sql);
                $_SESSION['usuario'] = $registro['nome'];
            }

            header('location: areaAdm.php');
        }
    }

    ?>

</body>

</html>