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
                <li><a href="../registrar./registrar.php">Registrar-se</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </nav>
    </header>
    <form method="post">
        <h3>Logar</h3>
        <input type="text" name="usuario" id="usuario" placeholder="Nome de Usuário">
        <input type="text" name="senha" id="senha" placeholder="Digite sua Senha">
        <input type="submit" onClick="return validar_dados()" value="LOGAR">
        <a href="../registrar./registrar.php" class="nova-conta">Ainda não tem conta? Click aqui!</a>
    </form>
    <?php
        if (isset($_POST['usuario'])) {
            $user = addslashes(htmlspecialchars($_POST['usuario']));
            $senhauser = addslashes(htmlspecialchars($_POST['senha']));
            $resp = $verificacao->buscaregistros($user, $senhauser);
            //echo print_r($resp);
            if ($resp == false) {
                ?>
                <script>alert("Conta inesistente! Crie uma agora =)")</script>
                <?php
            } else {
                //essa parte vai ser subistituida pela section com acesso aos dados do array com os dados do usuario.
                /*echo "Voçê pode logar<br>";
                echo print_r($resp);
                echo "<br><br><br><br><br>";
                echo $resp["usuario"];*/
                session_start();
                $_SESSION['usuario'] = $resp["usuario"];
                $_SESSION['nome'] = $resp["nome"];
                $_SESSION['ativo'] = $resp["ativo"];
                $_SESSION['nivel'] = $resp["nivel"];
                $_SESSION['email'] = $resp["email"];
                if (isset($_SESSION['usuario']) && isset($_SESSION['nome']) && isset($_SESSION['nivel'])) {
                    # header("location: ../inicio_user.php");
                    if ($resp["nivel"]<3) {
                        if ($resp["nivel"]==2){
                            # pagina do adm
                            header("location: ../inicio_adm.php");
                        }else {
                            # pagina do user
                            header("location: ../inicio_user.php");
                        }
                    }else {
                        # pagina do master
                        header("location: ../inicio_master.php");
                    }
                }
            }
        }
    ?>
</body>
</html>