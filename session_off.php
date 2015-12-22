<?php
	session_start();
    unset($_SESSION['idEncuesta']);
    unset($_SESSION['email']);
    unset($_SESSION['pass']);
    unset($_SESSION['idEncuestado']);
    unset($_SESSION['rolEncuestado']);
    header('Location: index.php');
?>