# login-php-myslq
Um projeto que deve contar com uma página de login onde deve ter um nível de hierarquia entre os usuários.   

Dia 2021/04/11
Hoje fiz algumas adições no arquivo logar, agora já e possivel encontrar registros no banco por meio do nome de usuário e do email. Essas foram as alterações de hoje o proximo passo e fazer a verificação da senha e fazer a pagina de registro de novos usuarios.

Dia 2021/04/15
Hoje aprendi a criar chaves ssh e como utilizalas com o git e github, isso não influencia muito o projeto em sí mas influencia muito meu ritmo de trabalho.

Dia 2021/04/18
Hoje inicie minha primeira seção PHP, apesar de algumas dúvidas, tudo ocorreu bem. Agora devo fazer uma estrutura condicional para redirecionar o usuário de acordo com seu nível de acesso.

Dia 2021/04/19
Hoje conclui o condicional para testar o nível de acesso do usuário e redireciona-lo para a pagina de seu respctivo nível. É também iniciei as paginas de usuário master, administrador e usuário comum.  

Dia 2021/04/21
Hoje fiz um condicional para testar se o usuario está ativo ou não, essa parte foi feita sem problemas. Mas aconteceu um erro com o cabeçalho das paginas o qual ainda não consegui descobri, mas, descobrirei em breve o que aconteceu e irei explicar para você.

Dia 2021/04/22
Hoje passai alguns bons minutos à procurar o erro que impedia a exibição do cabeçalho até que descobri que erra um simples erro de link o qual resolvi mas ainda não entendi muito bem o porque desse erro. O erro foi o seguinte &#60;link rel="stylesheet" href="./estilo_registrar./styleregistrar.css"&#62; aparentemente o erro estava nesse link após da um espaço entre a caminho tudo ocorreu da forma que deveria, ficando da seguinte forma &#60;link rel="stylesheet" href="./estilo_registrar ./styleregistrar.css"&#62;.

Dia 2021/04/22
Hoje conclui a parte de registro de novos usuarios sem muitos problemas. Então até o momento conclui o necessario do sistema de login e registro, agora quero melhorar a pagina de usuario de acordo com cada nível.