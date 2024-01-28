

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
        <h1 class="animate__animated animate__bounce"></h1>

        <button class="abrir-menu"></button>
        <nav class="menu">
            <button class="fechar-menu"></button>
            <ul>
                <li><a href="index.php" class="ativo">Home</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                <li class="subMenu">
                    <a href="servico.php">Treino</a>
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

            <div class="container text-center">
                <button type="button" class="btnlogin"   class="btn-outline-primary" data-toggle="modal" data-target="#loginModal" id="btnLogin">
                    Login 
                </button>
                <!-- Modal -->
                <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2 class="modal-title fs-5" id="loginModalLabel">Área Restrita</h2>
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
                                        <label class="labelsen" for="senha" class="col-form-label">Senha</label>
                                        <input  type="password" name="senha" class="form-control" id="senha" placeholder="Digite a senha">
                                    </div>
                                    <div class="mb-3">
                                        <input type="submit" class="btn btn-warning bt-sm" id="login-usuario-btn" value="Acessar">
                                    </div>
                                </form>
                            </div>

                        </div>



                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>