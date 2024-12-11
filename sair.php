<?php
    session_start();
    unset($_SESSION['credencial']);
    unset($_SESSION['senha']);
    header('Location: login.php');


?>