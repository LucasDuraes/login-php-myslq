<?php
    session_start();
    if (!isset($_SESSION['usuario']) && !isset($_SESSION['nome']) && !isset($_SESSION['ativo']) && !isset($_SESSION['nivel']) && !isset($_SESSION['email'])) {
        header("location: index.php");
    }
    if ($_SESSION['ativo'] != 1) {
        header('location: voceestabanido.php');
    }
    echo $_SESSION['usuario']."<br>";
    echo $_SESSION['nome']."<br>";
    echo $_SESSION['ativo']."<br>";
    echo $_SESSION['nivel']."<br>";
    echo $_SESSION['email']."<br><br>";
    echo "Você e um usuario adm."
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina do Adm - MRR-Racing</title>
</head>
<body>
    <?php
        require_once './cabecalho.php';
    ?>
</body>
</html>