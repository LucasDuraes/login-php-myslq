<?php
class criar{

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

    public function buscaregistros($nomeusuario, $email){
        $val_registro = array();//validação de registros
        $cmd = $this->pdo->prepare("SELECT `usuario`, `nome`, `ativo`, `nivel`, `email` FROM `registro-login` WHERE `usuario`=:ue OR `email`=:em;");
        $cmd->bindValue(":ue", $nomeusuario);
        $cmd->bindValue(":em", $email);
        $cmd->execute();
        $val_registro = $cmd->fetch(PDO::FETCH_ASSOC);
        if (!empty($val_registro)) {
            //se for false
            return false;
        } else {
            //se for true
            return true;
        }
    }

    public function registraruser($nomeusuario, $nome, $sobrenome, $nascimento, $email, $senha){
        $cmd = $this->pdo->prepare("INSERT INTO `registro-login` (usuario, nome, sobrenome, nascimento, ativo, nivel, email, senha, cadastro) VALUES (:nu, :nm, :sm, :nc, '1', '1', :em, SHA1(:se), NOW( ));");
        //(:nu, :nm, :sm, :nc, '1', '1', :em, :se)
        $cmd->bindValue(':nu', $nomeusuario);
        $cmd->bindValue(':nm', $nome);
        $cmd->bindValue(':sm', $sobrenome);
        $cmd->bindValue(':nc', $nascimento);
        $cmd->bindValue(':em', $email);
        $cmd->bindValue(':se', $senha);
        $cmd->execute();
    }
}

?>