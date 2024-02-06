
<style>
/* modal do meu login */

body {
    background: url(../img/fundoDestaque.png);
    object-fit: cover;
    
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
    font-size: 2.15rem!important;
    -webkit-text-stroke: 1px black; /* Adiciona uma borda preta ao texto para navegadores baseados em Webkit (como Chrome e Safari) */
    text-shadow: 1px 0 0 black, -1px 0 0 black, 0 1px 0 black, 0 -1px 0 black; /* Adiciona uma borda preta ao texto para outros navegadores */
}
.modal-content {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 20px;
    border-radius: 10px;
    max-width: 750px; /* Adapte o máximo de largura conforme necessário */
    background: #ffffff;
}

/* Se desejar ajustar ainda mais a aparência do modal, pode adicionar estilos adicionais aqui */


.col-form-label{
    color:#34495e;
    margin-right: 2px;
}


#login-usuario-form{
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  .labelsen{
    margin-right: 10px;
    color:#34495e;
  }
  
.btn:hover{
    background:#48c9b0;
}
.link-dark:hover {
    color:#34495e!important; /* Muda a cor para amarelo ao passar o mouse */
}
.link-dark{
    font-size: 1.0em!important;
}
.py-3{
    color:#34495e!important;
}
.bt-sm{
    width: 220px 
}
.form-control{
    margin: 20px;
}


</style>




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

