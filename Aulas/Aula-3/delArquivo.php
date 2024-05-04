
<?php

$nomeArquivo = $_GET['id'];
$diretorio = "documentos/";

if (unlink($diretorio.$nomeArquivo)) {
    echo "Arquivo excluído com sucesso!";
} else {
    echo "Arquivo não pode ser excluído!";
}

echo "<a href='form-arquivo.php'>voltar</a>";

?>