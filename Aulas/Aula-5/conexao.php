<?php

    $servername = "localhost";
    $database = "aula";
    $username = "root";
    $password = "unisal123";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Conexão falhou: " . mysqli_connect_error());
    }

    //echo "BD conectado com sucesso!";
    //mysqli_close($conn);
?>