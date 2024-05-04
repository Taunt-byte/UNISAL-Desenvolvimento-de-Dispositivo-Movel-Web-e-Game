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

    <a href="areaAdm.php">voltar</a>
    <br><br>

    <form name="formBusca" method="POST" action="usuarios.php">
        <a href="cadUsuario.php">Cadastrar Usuário</a>
        | Pesquisar: <input type="text" name="pesquisa">
        <input type="submit" value="Pesquisar">
        <?php

        $varBusca = "";

        if (isset($_POST['pesquisa'])) {
            $varBusca = $_POST['pesquisa'];
            echo " - <a href='usuarios.php'>Limpar filtro</a>";
        }

        ?>
    </form>

    <?php

    include 'conexao.php';

    $resultado = mysqli_query($conn, "select * from usuarios where nome like '" . $varBusca . "%'");
    $nregistros = mysqli_num_rows($resultado);

    ?>

    <table width="800" border=1>
        <tr bgcolor=#EEEEEE>
            <td>Ações</td>
            <td>Código</td>
            <td>Nome</td>
            <td>E-mail</td>
            <td>Telefone</td>
        </tr>

        <?php

        if ($nregistros == 0) {
            echo "<tr><td colspan=5>Nenhum registro encontrado!</td></tr>";
        } else {
            for ($i = 0; $i < $nregistros; $i++) {
                $registro = mysqli_fetch_assoc($resultado);
                echo "<tr>";
                echo "<td><a href='delUsuario.php?id=" . $registro['codusuario'] . "' onClick='return confirmaExcluir();'>Excluir</a>";
                echo " | <a href='altUsuario.php?id=" . $registro['codusuario'] . "'>Alterar</a></td>";
                echo "<td>" . $registro['codusuario'] . "</td>";
                echo "<td>" . $registro['nome'] . "</td>";
                echo "<td>" . $registro['email'] . "</td>";
                echo "<td>" . $registro['telefone'] . "</td>";
                echo "</tr>";
            }
        }

        ?>

    </table>

</body>

</html>