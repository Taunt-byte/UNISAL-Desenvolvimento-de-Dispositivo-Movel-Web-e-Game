<?php

session_start();
unset($_SESSION['logado']);
unset($_SESSION['usuario']);
session_destroy();
session_unset();
header('location:index.php');

?>