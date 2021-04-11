<?php
class verificar{

    private $pdo;
    public function __construct($dbname, $host, $user, $senha){
        try {
            $this->pdo = new PDO("mysql:dbname=".$dbname.";host=".$host,$user,$senha);    
        } catch (PDOException $th) {
            echo "Erro com Banco de Dados: ".$th->getMessagem();
            exit();
        } catch (Exception $th){
            echo "ERRO: ".$th->getMessagem();
            exit();
        }
    }
    public function buscaregistros($user, $senha){
        $val_registro = array();//validação de registros
        $cmd = $this->pdo->prepare("SELECT `usuario`, `nome` FROM `registro-login` WHERE `usuario`=:ue OR `email`=:ue ;");
        $cmd->bindValue(":ue", $user);
        $cmd->execute();
        $val_registro = $cmd->fetchAll(PDO::FETCH_ASSOC);
        return $val_registro;
    }
}

?>