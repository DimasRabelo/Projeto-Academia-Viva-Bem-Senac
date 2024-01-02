function confirmarDesativacao() {
    // Exibir uma caixa de diálogo de confirmação
    var confirmacao = confirm("Tem certeza de que deseja desativar este item?");

    // Retorna true se o usuário clicou em "OK", caso contrário, retorna false
    return confirmacao;
}