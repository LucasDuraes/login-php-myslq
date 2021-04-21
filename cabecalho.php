<?php ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cabeçalho - MRR-racing</title>
    <style>
        *{
        margin: 0px;
        padding: 0px;
        list-style: none;
        font-size: 1.2rem;
        font-family: Arial;
        }

        a{
            text-decoration: none;
            color: white;
        }

        .cabecalho01{
            background: #1d1e20;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
        }

        .menu{
            display: flex;
        }

        .menu li{
            margin-left: 10px;
        }

        .menu li a{
            display: block;
            padding: 10px;
        }
    </style>
</head>
<body>
    <header class="cabecalho01">
        <a href="./index.php">LOGO</a>
        <nav>
            <ul class="menu">
                <li><a href="./logar./logar.php">Logar</a></li>
                <li><a href="./registrar./registrar.php">Registrar-se</a></li>
                <li><a href="https://github.com/LucasDuraes/login-php-mysql">Contato</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>