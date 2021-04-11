<?php
    require_once 'verificar.php';
    $verificacao = new verificar("mrr-racing", "localhost", "root", "");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logar - MRR-Racing</title>
    <link rel="stylesheet" href="./estilo_logar./stylelogar.css">
    <script src="./javascript./index.js"></script>
</head>
<body>
<header class="cabecalho01">
        <a href="../index.php">LOGO</a>
        <nav>
            <ul class="menu">
                <li><a href="./logar.php">Logar</a></li>
                <li><a href="#">Registrar-se</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </nav>
    </header>
    <form method="post">
        <h3>Logar</h3>
        <input type="text" name="usuario||email" id="usuario||email" placeholder="Nome de Usuário ou E-mail">
        <input type="text" name="senha" id="senha" placeholder="Digite sua Senha">
        <input type="submit" onClick="return validar_dados()" value="LOGAR">
        <a href="#" class="nova-conta">Ainda não tem conta? Click aqui!</a>
    </form>
    <?php
        //$resp = $verificacao->buscaregistros();
        //print_r($resp);
        if (isset($_POST['usuario||email'])) {
            $userORemail = addslashes($_POST['usuario||email']);
            $senha = addslashes($_POST['senha']);
            $resp = $verificacao->buscaregistros($userORemail, $senha);
            echo print_r($resp);
        }
    ?>
</body>
</html>