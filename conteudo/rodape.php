<footer class="rodape wow animate__animated animate__fadeInUp">
    <section>
        <div class="site">

            <!-- INFO ACADEMIA -->
            <div class="infoAcademia">
                <img src="img/icones/logoVivaBem.svg" alt="Logo da Academia Viva Bem">
                <ul>
                    <li>
                        <a href="#">
                            <img src="img/icones/iconeFacebook.svg" alt="Rede Socil da Academia">
                        </a>
                    </li>
                    <li><a href="#"><img src="img/icones/iconeInstagram.svg" alt="Rede Socil da Academia"></a></li>
                    <li><a href="#"><img src="img/icones/iconeWhatsVerde.svg" alt="Rede Socil da Academia"></a></li>
                </ul>
                <a href="mailto:vivabem@ti21.smpsistema.com.br">vivabem@ti21.smpsistema.com.br</a>
                <a href="tel:+5511999999999">(11) 999 999 999</a>

                <table>
                    <tbody>
                        <tr>
                            <td rowspan="2">Horário de Funcionamento</td>
                            <td> Seg-Sex 11h às 16h</td>
                        </tr>
                        <tr>
                            <td>Sáb e Fer 11h às 12h</td>
                        </tr>
                    </tbody>
                </table>

            </div>

            <!-- Políticas e Privacidade -->
            <div class="politicas">
                <h2>Políticas e Privacidade</h2>
                <p>Coletamos informações pessoais de forma voluntária para responder a consultas e fornecer
                    informações sobre nossos serviços. Utilizamos cookies para melhorar a experiência do usuário.
                    Suas informações são protegidas por medidas de segurança, mas a transmissão online não é
                    totalmente segura. Não compartilhamos seus dados sem consentimento, exceto em obrigações legais.
                    Links para terceiros não estão sob nossa responsabilidade. Podemos atualizar essa política
                    periodicamente.
                </p>
                <h3>Av. Marechal Tito, 1500</h3>
                <h3>São Paulo - SP</h3>
                <h3>08010-090</h3>
            </div>

        </div>
    </section>

    <section>
        <h2>Direitos reservados ao TI21 - Senac SMP</h2>
    </section>

    <section>
        <h2>Desenvolvido por Alessandro e Ricardo</h2>
    </section>

</footer>


<div id="loginModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2><img src="img/logoVivaBem .png" alt=""></h2>
        <form id="login-usuario-form">
            <div class="mb-3">
                <label for="email" class="col-form-label">Usuário</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Digite o Usuario">
            </div>
            <div class="mb-3">
                <label class="labelsen" for="senha" class="col-form-label">Senha</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Digite a senha">
            </div>
            <p><a href="#" class="link-dark">Esqueceu a Senha</a></p>
            <div class="mb-3">
                <button type="button" onclick="carregarlogin()">Entrar</button>
                <!-- <input type="submit" class="btn btn-warning bt-sm" id="login-usuario-btn" value="Acessar"> -->
            </div>
            <div class="text-darker-gray py-3">Não tem cadastro?</div>
            <a href="#" class="link-dark">Cadastre-se</a>

        </form>
        <div id="msgLogin"></div>
    </div>

</div>

