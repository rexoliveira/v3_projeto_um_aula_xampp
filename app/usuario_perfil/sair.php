<?php
session_start();

unset($_SESSION['id'], $_SESSION['nome'],$_SESSION['foto']);

header('Location: ../usuario_login/login.php');

?>
