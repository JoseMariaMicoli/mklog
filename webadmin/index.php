<?php
    include "connection.php";
?>

<?php
    session_start();
    if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])) {
        header("Location: login.php");
        exit;
    } else {
	header("Location: busca.php");
    }
?>

