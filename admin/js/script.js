function confirmarDesativacao() {
    // Exibir uma caixa de diálogo de confirmação
    var confirmacao = confirm("Tem certeza de que deseja desativar este item?");

    // Retorna true se o usuário clicou em "OK", caso contrário, retorna false
    return confirmacao;
}

var modal = document.getElementById('loginModal');
var loginButton = document.getElementById('loginButton');

loginButton.onclick = function() {
   modal.style.display = 'block';
};
function closeModal(){
   modal.style.display = 'none';
}

function carregarlogin() {
   closeModal();
   alert('login bem sucedido! Redirecionando');
}
