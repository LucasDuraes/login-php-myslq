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
    public function buscaregistros($user, $senhauser){
        $val_registro = array();//validação de registros
        $cmd = $this->pdo->prepare("SELECT `usuario`, `nome`, `nivel` FROM `registro-login` WHERE `usuario`=:ue AND `senha`=SHA1(:se);");
        $cmd->bindValue(":ue", $user);
        $cmd->bindValue(":se", $senhauser);
        $cmd->execute();
        $val_registro = $cmd->fetch(PDO::FETCH_ASSOC);
        if (empty($val_registro)) {
            //se for false
            return false;
            exit();
        } else {
            //se for true
            return $val_registro;
        }
        
    }
}

?>