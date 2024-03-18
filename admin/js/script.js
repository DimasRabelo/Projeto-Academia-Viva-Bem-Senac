function confirmarDesativacao() {
  // Exibir uma caixa de diálogo de confirmação
  var confirmacao = confirm("Tem certeza de que deseja desativar este item?");

  // Retorna true se o usuário clicou em "OK", caso contrário, retorna false
  return confirmacao;
}

function fecharLogin() {
  var login = document.querySelector('.estruturaLoginAdmin'); // Seleciona a estrutura pelo elemento d classe para o Fechamento
  login.style.display = 'none';

  window.location.href = 'http://localhost/Projeto-Academia-Viva-Bem-Senac/';
}

function carregarLogin() {
  //alert('Login bem sucedido! Redirecionando');
  $("#loginAdmin").click(function () {
    var formData = $('#loginAdmin').serialize();

    //console.log("Dados do Form: " + formData);

    $.ajax({
      url: '../admin/class/funcionario.php',
      method: 'POST',
      data: formData,
      dataType: 'json',

     

      success: function (data) {
        if (data.success) {

          $('#msgLogin').html('<div class="msgSuccess">' + data.message + '</div>');

          var idFuncionario = data.idFuncionario; //Banco de dados do Funcionário
          window.location.href = 'http://localhost/Projeto-Academia-Viva-Bem-Senac/admin/index.php?p=dashboard';

        } else {

          $('#msgLogin').html('<div class="msgSuccess">' + data.message + '</div>');

        }
      },
      error: function(xhr,status,error) {
        console.log(xhr);
      }
    });
 });
}









/*var email = document.getElementById('email').value;
  var senha = document.getElementById('senha').value;

  console.log("E-mail: " + email);
  console.log("Senha: " + senha); */
