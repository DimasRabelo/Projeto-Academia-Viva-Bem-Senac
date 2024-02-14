<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Login Admin</title>

    <link rel="stylesheet" href="./css/reset.css">

    <!-- estilo css sempre o último -->
    <link rel="stylesheet" href="./css/login.css">

</head>


<body class="corpoLogin">

    <div class=" estruturaLoginAdmin">
        <span class="close" onclick="fecharLogin()"><img src="img/botao-fechar.png" alt=""></span>
        <h2><img src="img/logoVivaBem .png" alt=""></h2>
        <form id="loginAdmin">
            <div class=" CamposAdmin">
                <label for="email" class="lblUsuarioeSenha"   >Usuário</label>
                <input type="email" class="iptUsuarioeSenha" name="email" id="email" placeholder="Digite o Usuário" autocomplete="username">

            </div>
            <div class=" CamposAdmin">
                <label for="senha" class="lblUsuarioeSenha"   >Senha</label>
                <input type="password" name="senha" id="senha" class="iptUsuarioeSenha" placeholder="Digite a senha" autocomplete="current-password">

            </div>
            <p class="linkEsqueceuAsenha"><a href="#">Esqueceu a Senha</a></p>
            <div class="botaoAdmin">
                <button type="button" onclick="carregarLogin()">Entrar</button>
            </div>

            <div id="msgLogin"></div>

            <p class="linkCadastro"><a href="#">Cadastre-se</a></p>
           
        </form>
        

    </div>


    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="js/script.js"></script>

</body>

</html>