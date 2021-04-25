<?php
    require_once 'criarregistro.php';
    $verificacao = new criar("mrr-racing", "localhost", "root", "");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar-se MRR-Racing</title>
    <link rel="stylesheet" href="./estilo_registrar ./styleregistrar.css">
</head>
<body>
    <header class="cabecalho01">
        <a href="../index.php">LOGO</a>
        <nav>
            <ul class="menu">
                <li><a href="../logar./logar.php">Logar</a></li>
                <li><a href="./registrar.php">Registrar-se</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </nav>
    </header>
    <form method="post">
        <h3>Registrar-Se</h3>
        <label for="nome-usuario">Nome de Usuário</label>
        <input type="text" name="nome-usuario" id="nome-usuario" placeholder="Nome de Usuário">
        <label for="primeiro-nome">Seu Nome</label>
        <input type="text" name="primeiro-nome" id="primeiro-nome" placeholder="Seu Nome">
        <label for="sobrenome">Seu Sobrenome</label>
        <input type="text" name="sobrenome" id="sobrenome" placeholder="Seu Sobrenome">
        <label for="nascimento">Data de Nascimento</label>
        <input type="date" name="nascimento" id="nascimento">
        <label for="email">Seu E-mail</label>
        <input type="email" name="email" id="email" placeholder="Seu E-mail">
        <label for="senha">Digite Sua Senha</label>
        <input type="password" name="senha" id="senha" placeholder="Digite Sua Senha">
        <label for="confirma-senha">Comfirme Sua Senha</label>
        <input type="password" name="confirma-senha" id="confirma-senha" placeholder="Comfirme Sua Senha">
        <input type="submit" value="Registrar">
    </form>

    <?php
        
        if (isset($_POST['confirma-senha'])) {
            $nomeusuario = addslashes(htmlspecialchars($_POST['nome-usuario']));
            $nome = addslashes(htmlspecialchars($_POST['primeiro-nome']));
            $sobrenome = addslashes(htmlspecialchars($_POST['sobrenome']));
            $nascimento = addslashes(htmlspecialchars($_POST['nascimento']));
            $email = addslashes(htmlspecialchars($_POST['email']));
            $senha = addslashes(htmlspecialchars($_POST['senha']));
            
            $resp = $verificacao->buscaregistros($nomeusuario, $email);
        
            if ($resp == false) {
                ?>
                <script>alert("Já existe uma conta com esse nome de usuário ou E-mail!")</script>
                <?php
            } else {
                //aqui vem um metodo para registrar os usuarios!
                ?>
                <script>alert("Você pode ser registrado!")</script>
                <?php
            }
        }
    ?>

</body>
</html>