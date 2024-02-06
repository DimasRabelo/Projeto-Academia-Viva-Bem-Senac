<style>
    .link-dark:hover {
        color: #f1c40f !important;
        /* Muda a cor para amarelo ao passar o mouse */
    }

    .link-dark {
        font-size: 1.0em !important;
    }

    .py-3 {
        color: #f1c40f !important;
    }

    .bt-sm {
        width: 220px
    }
</style>

<header id="menufixo">
    <div class="topoContato">
        <div class="site">
            <a href="mailto:contato@projetoti21.com.br">contato@projetoti21.com.br</a>
            <a href="tel:+5511988626604">(11) 988 626 604</a>
            <ul class="topoRedeSocial">
                <li><a href="#" target="_blank">FACEBOOK</a></li>
                <li><a href="#" target="_blank">INSTAGRAM</a></li>
                <li><a href="#" target="_blank">WHATSAPP</a></li>
            </ul>
        </div><!-- FIM DO TOPO 01-->
    </div>

    <div class="site"><!-- COMEÇO DO TOPO 02-->
        <h1 class="animate__animated animate__bounce">Projeto ti21</h1>

        <button class="abrir-menu"></button>
        <nav class="menu">
            <button class="fechar-menu"></button>
            <ul>
                <li><a href="index.php" class="ativo">Home</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                <li class="subMenu">
                    <a href="treino.php">Treino</a>
                    <ul>
                        <li><a href="#">Treino 01</a></li>
                        <li><a href="#">Treino 02</a></li>
                        <li><a href="#">Treino 03</a></li>
                        <li><a href="#">Treino 04</a></li>
                        <li><a href="#">Treino 05</a></li>
                    </ul>
                </li>
                <li><a href="contato.php">Contato</a></li>
            </ul>

            <button id="loginButton">Login</button>
        </nav>
    </div>
</header>


<div  id="loginModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2><img src="img/logoVivaBem .png" alt=""></h2>
        <form id="login-usuario-form">
            <div class="mb-3">
                <label for="email" class="col-form-label">Usuário</label>
                <input type="text" name="email" class="form-control" id="email" placeholder="Digite o Usuario">
            </div>
            <div class="mb-3">
                <label class="labelsen" for="senha" class="col-form-label">Senha</label>
                <input type="password" name="senha" class="form-control" id="senha" placeholder="Digite a senha">
            </div>
            <p><a href="#" class="link-dark">Esqueceu a Senha</a></p>
            <div class="mb-3">
                <button type="button" onclick="carregarlogin()">Entrar</button>
                <!-- <input type="submit" class="btn btn-warning bt-sm" id="login-usuario-btn" value="Acessar"> -->
            </div>
            <div class="text-darker-gray py-3">Não tem cadastro?</div>
            <a href="#" class="link-dark">Cadastre-se</a>

        </form>
    </div>

</div>
</div>

<script>




</script>