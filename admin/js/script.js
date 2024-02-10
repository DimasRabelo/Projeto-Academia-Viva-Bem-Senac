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
   // alert('login bem sucedido')
  // alert('login bem sucedido! Redirecionando');

   $("#login-usuario-form").click(function () {
     var formData = $('#login-usuario-form').serialize();
     
     $.ajax({
      url: '../admin/class/funcionario.php',  
      method: 'POST',                   
      data: formData,                   
      dataType: 'json',  // Corrigido de "dataTypr" para "dataType"
      success: function(data) {                       
        if(data.success) {
          //Bem Sucedido caminho onde recebera a informação
          $('#msgLogin').html('<div class="msgSuccess">'+ data.message+'</div>');

          var idFuncionario = data.idFuncionario; //FAZ RREFERENCIA COM O BANCO DE DADOS
          window.location.href = 'http://localhost/projetoAcademia/admin/index.php?p=dashboard';
        }
      },
      error: function(xhr, status, error) {
         console.log(error);// Tratamento de erro
      }
     });
   });


}

  
  
  







