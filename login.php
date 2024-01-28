<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.::Projeto TI21::.</title>
    <link rel="stylesheet" href="css/reset.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/lity.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="path/to/lightbox.css" rel="stylesheet" />

    <!-- Nosso estilo é sempre o último-->
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/responsivo.css">


</head>


<body>
    <div class="container text-center">

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#loginModal">
            ACESSAR
        </button>

        <!-- Modal -->
        <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="loginModalLabel">Área Restrita</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="login-usuario-form">
                            <span id="msgAlertErroLogin"></span>
                            <div class="mb-3">
                                <label for="email" class="col-form-label">Usuário</label>
                                <input type="text" name="email" class="form-control" id="email" placeholder="Digite o Usuario">
                            </div>
                            <div class="mb-3">
                                <label for="senha" class="col-form-label">Senha</label>
                                <input type="password" name="senha" class="form-control" id="senha" placeholder="Digite a senha">
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="btn btn-outline-primary bt-sm" id="login-usuario-btn" value="Acessar">
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/lity.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="path/to/lightbox.js"></script>
    <script src="js/animacoes.js"></script>

</body>

</html>

<script>
    const loginForm = document.querySelector(".login-usuario-form");
    const msgAlertErroLogin = document.getElementById("msgAlertErroLogin");

    loginForm.addEventListener("submit", async (e) => {
        e.preventDefault();

        console.log("Formulário enviado!");

        if (document.getElementById("email").value === "") {
            msgAlertErroLogin.innerHTML = "<div class='alert alert-danger' role='alert'>Erro: Necessário Preencher o campo de usuario!</div>";
        }





    });
</script>

