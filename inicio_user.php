<!--Essa pagina só e acessivel se o usuario estiver logado.-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Inicial Logar - MRR-racing</title>
</head>
<body>
    <?php
        session_start();
        if (!isset($_SESSION['usuario']) && !isset($_SESSION['nome']) && !isset($_SESSION['nivel'])){
            header("location: index.php");
        }
        echo $_SESSION['usuario']."<br>";
        echo $_SESSION['nome']."<br>";
        echo $_SESSION['nivel']."<br><br><br>";
        echo "Você e um usuario simples."
    ?>
</body>
</html>