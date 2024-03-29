<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Login FrontEnd</title>

    <link rel="stylesheet" href="/css/reset.css">

    <!-- estilo css sempre o último -->

</head>

<style>
 body {
        background: url(./img/fundoDestaque.png) no-repeat;
        background-size: cover;
        background-position: center;
        margin: 0;
        padding: 0;
    } 
    
        .modal {
            text-align: center;
    
    
    
        }
    
    
        .close {
            position: absolute;
            top: 20px;
            right: 20px;
            cursor: pointer;
            font-size: 1.5em;
        }
    
    
        .fs-5 {
            color: #f1c40f;
            font-size: 2.15rem !important;
            -webkit-text-stroke: 1px black;
            /* Adiciona uma borda preta ao texto para navegadores baseados em Webkit (como Chrome e Safari) */
            text-shadow: 1px 0 0 black, -1px 0 0 black, 0 1px 0 black, 0 -1px 0 black;
            /* Adiciona uma borda preta ao texto para outros navegadores */
        }
    
        .modal-content {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            border-radius: 10px;
            max-width: 750px;
            /* Adapte o máximo de largura conforme necessário */
            background: #ffffff;
        }
    
        /* Se desejar ajustar ainda mais a aparência do modal, pode adicionar estilos adicionais aqui */
    
    
        .col-form-label {
            color: #34495e;
            margin-right: 14px
        }
    
    
        #login-usuario-form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    
        .labelsen {
            margin-right: 27px;
            color: #34495e;
        }
    
        .btn:hover {
            background: #48c9b0;
        }
    
        .link-dark:hover {
            color: #34495e !important;
            /* Muda a cor para amarelo ao passar o mouse */
        }
    
        .link-dark {
            font-size: 1.0em !important;
        }
    
        .py-3 {
            color: #34495e !important;
        }
    
        .bt-sm {
            width: 220px
        }
    
        .form-control {
            margin: 20px;
        }

</style>


<body>
    <div class="modal-content myModal">
        <span class="close" onclick="fecharModal()">&times;</span>
        <h2><img src="img/logoVivaBem.png" alt=""></h2>
        <form id="login-usuario-form">
            <div class="mb-3">
                <label for="email" class="col-form-label">Usuário</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Digite o Usuario">
            </div>
            <div class="mb-3">
                <label class="labelsen" for="senha">Senha</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Digite a senha">
            </div>
            <p><a href="#" class="link-dark">Esqueceu a Senha</a></p>
            <div class="mb-3">
                <button type="button" onclick="carregarLogin()">Entrar</button>
            </div>
            <div class="text-darker-gray py-3">Não tem cadastro?</div>
            <a href="#" class="link-dark">Cadastre-se</a>
        </form>
        <div id="msgLogin"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/lity.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="js/animacoes.js"></script>
</body>
