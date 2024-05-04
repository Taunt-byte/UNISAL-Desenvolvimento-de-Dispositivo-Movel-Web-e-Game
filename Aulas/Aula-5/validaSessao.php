<?php

session_start();
if (!isset($_SESSION['logado']) == true) {
    unset($_SESSION['logado']);
    header('location:index.php');
} else {
    if ($_SESSION['logado'] != "warnerBrezolin") {
        unset($_SESSION['logado']);
        header('location:index.php');
    }
}

?>