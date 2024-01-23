<style>
    body {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        margin: 0;
    }

    .loginEmail {
        display: flex;
        flex-direction: column;
        max-width: 400px;
        width: 100%;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
    }

    
    .loginEmail button {
        background-color: #4caf50;
        color: white;
        padding: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
</style>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.::Projeto TI21::.</title>
    <link rel="stylesheet" href="css/reset.css">

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


    <main>

        <form class="loginEmail">
            <div>
                <label for="emailLogin">Digite o Email</label>
                <input type="email" id="emailLogin" aria-describedby="emailHelp">
                <div id="emailHelp">Nunca compartilharemos seu e-mail com mais ninguém.</div>
            </div>
            <div class="mb-3">
                <label for="senhaEmail">Digite a Senha</label>
                <input type="password" id="senhaEmail">
            </div>
            <div>
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit">Enviar</button>
        </form>


    </main>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/lity.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="path/to/lightbox.js"></script>
    <script src="js/animacoes.js"></script>

</body>

</html>