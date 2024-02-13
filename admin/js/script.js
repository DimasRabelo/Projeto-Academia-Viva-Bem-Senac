function confirmarDesativacao() {
    // Exibir uma caixa de diálogo de confirmação
    var confirmacao = confirm("Tem certeza de que deseja desativar este item?");

    // Retorna true se o usuário clicou em "OK", caso contrário, retorna false
    return confirmacao;
}



function fecharModal() {
  var modal = document.querySelector('.myModal'); // Seleciona o elemento pela classe
  modal.style.display = 'none';
}

function carregarLogin() {
  // alert('login bem sucedido! Redirecionando');

  $("#login-usuario-form").click(function () {
    var formData = $('#login-usuario-form').serialize();
    
    $.ajax({
     url: '../admin/class/funcionario.php',  
     method: 'POST',                   
     data: formData,                   
     dataType: 'json', 
     success: function(data) {                       
       if(data.success) {
         // Bem Sucedido caminho onde receberá a informação
         $('#msgLogin').html('<div class="msgSuccess">'+ data.message+'</div>');

         // Fechar o modal
         fecharModal();

         // Redirecionar para o painel de controle do administrador
         window.location.href = 'http://localhost/Projeto-Academia-Viva-Bem-Senac/admin/index.php?p=dashboard';
       }
     },
     error: function(xhr, status, error) {
        console.log(error);// Tratamento de erro
     }
    });
  });
}

  







