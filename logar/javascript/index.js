function validar_dados(){
    var useremail = document.getElementById('usuario||email').value
    var senha = document.getElementById('senha').value
    
    if (useremail==""){
        alert('Prencha o campo User ou E-mail Corretamente!')
        document.getElementById('usuario||email').focus()
        return false
    }
    
    if (senha==""){
        alert('Prencha o campo Senha Corretamente!')
        document.getElementById('senha').focus()
        return false
    }
}