function validardadosregistro(){
    var nomeusuario = document.getElementById('nome-usuario').value
    var nome = document.getElementById('primeiro-nome').value
    var sobrenome = document.getElementById('sobrenome').value
    var nascimento = document.getElementById('nascimento').value
    var email = document.getElementById('email').value
    var senha = document.getElementById('senha').value
    var confirmasenha = document.getElementById('confirma-senha').value
    
    if (nomeusuario==""){
        alert('Informe um Nome de Usuário!')
        document.getElementById('nome-usuario').focus()
        return false
    }

    if (nome==""){
        alert('Informe o seu Nome!')
        document.getElementById('primeiro-nome').focus()
        return false
    }

    if (sobrenome==""){
        alert('Informe o seu Sobrenome!')
        document.getElementById('sobrenome').focus()
        return false
    }
    
    if (nascimento==""){
        alert('Informe sua data de nascimento!')
        document.getElementById('nascimento').focus()
        return false
    }

    if (email==""){
        alert('Informe um E-mail!')
        document.getElementById('email').focus()
        return false
    }

    if (senha==""){
        alert('Informe uma Senha!')
        document.getElementById('senha').focus()
        return false
    }

    if (confirmasenha==""){
        alert('Confirme sua Senha!')
        document.getElementById('confirma-senha').focus()
        return false
    }

    if (senha!==confirmasenha){
        alert('A senha esta diferente!')
        document.getElementById('senha').focus()
        return false
    }
}