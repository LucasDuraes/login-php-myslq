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
    <link rel="stylesheet" href="./estilo_index./styleindex.css">
</head>
<body>
    <header class="cabecalho01">
        <a href="./index.php">LOGO</a>
        <nav>
            <ul class="menu">
                <li><a href="./logar./logar.php">Logar</a></li>
                <li><a href="./registrar./registrar.php">Registrar-se</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>