<div  id="loginModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2><img src="img/logoVivaBem.png" alt=""></h2>
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