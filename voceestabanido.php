<?php
session_start();
$_SESSION['usuario'];
$_SESSION['nome'];
$_SESSION['ativo'];
$_SESSION['nivel'];
$_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Você Banido!</title>
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
    <p>Olá <?php echo $_SESSION['usuario'];?>, você esta banido temporariamente.</p>
    <p>Você foi denuciado pela cominidade devido à isso estamos analisando seu perfil. Isso pode levar alguns dias.</p>
    <p>Quando terminarmos a análise enviaremos um e-mail no seguinte endereço <?php echo $_SESSION['email'];?>, para te avisar de todos os detalhes.</p>
</body>
</html>