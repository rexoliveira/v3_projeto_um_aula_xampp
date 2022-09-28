<?php
session_start();

unset($_SESSION['id'], $_SESSION['nome']);

header('Location: ../usuario_login/login.php');

?>
