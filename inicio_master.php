<?php
    session_start();
    if (!isset($_SESSION['usuario']) && !isset($_SESSION['nome']) && !isset($_SESSION['nivel'])) {
        header("location: index.php");
    }
    echo $_SESSION['usuario']."<br>";
    echo $_SESSION['nome']."<br>";
    echo $_SESSION['nivel']."<br><br><br>";
    echo "Você e um usuario master."
?>