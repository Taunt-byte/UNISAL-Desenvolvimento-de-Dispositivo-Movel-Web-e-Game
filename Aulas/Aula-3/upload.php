<?php

$arquivo = $_FILES['arquivo'];
$diretorio = "documentos/";
$tamanhoArquivo = 50000;
$extensoes = array(".jpg", ".png", ".gif", ".docx");
$extArquivo = strchr($arquivo['name'], '.');

if (in_array($extArquivo, $extensoes)) {
    if ($arquivo['size'] < $tamanhoArquivo) {

        $nomeArquivo = "WB_".date("d").date("m").date("yy")."_".date("h").date("i").date("s").$extArquivo;

        if (move_uploaded_file($arquivo['tmp_name'], $diretorio . $nomeArquivo)) {
            echo "Arquivo gravado com sucesso!";
            echo "<br><img src='" .$diretorio.$nomeArquivo. "'>";
            echo "<br><a href='" .$diretorio.$nomeArquivo. "'>" .$nomeArquivo. "</a>";
            echo "<br><a href='delArquivo.php?id=".$nomeArquivo."'>Excluir arquivo</a>";
        } else {
            echo "Erro ao enviar arquivo!";
        }
    } else {
        echo "Arquivo maior que o permitido!";
    }
} else {
    echo "Extensão não permitida!";
}
