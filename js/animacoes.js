/* BANNER */
$(document).ready(function () {
    $('.banner').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        dots: true,
    });
});

/* GALERIA */
$('.galeria').slick({
    centerMode: true,
    centerPadding: '5%',
    slidesToShow: 7,
    autoplay: true,
    responsive: [
      {
        breakpoint: 1001,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 5
        }
      },
      {
        breakpoint: 601,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });

/* WOW JS */
new WOW().init();


/* MENU FIXO */

window.onscroll = function () {
  let top = window.scrollY;

  if(top > 1200){
    document.getElementById("menufixo").classList.add("menufixo");
  }else{
    document.getElementById("menufixo").classList.remove("menufixo");
  }   
  
}

/* MENU MOBILE */
document.querySelector(".abrir-menu").onclick = function () {
  document.documentElement.classList.add("menu-mobile");  
}
document.querySelector(".fechar-menu").onclick = function (){
  document.documentElement.classList.remove("menu-mobile");
}

/* Enviar Dados do Form por Whatsapp */

//function Enviarwhats(){
    //alert ("CHEGUEI AQUI");
//} teste para saber se está funcionado //

function EnviarWhats(){
    let assunto = '*Site - Viva Bem Academia*';
    let nome    =  ' *Nome:* ' + document.querySelector('#nome').value;
    let email    =  ' *E-mail:* ' + document.querySelector('#email').value;
    let fone    =  ' *Telefone:* ' + document.querySelector('#fone').value;
    let mens    =   '*Mensagem:*'  + document.querySelector('#mens').value;
    
    let numeroWhats = '5511988626600';

    let quebraDelinha = '%0A'; 

    window.open('https://api.whatsapp.com/send?phone=' +
      numeroWhats + '&text=' + 
      assunto + quebraDelinha + quebraDelinha + 
      nome + quebraDelinha + 
      email + quebraDelinha +
      fone + quebraDelinha +
      mens, '_blank' );

    
     //  console.log(nome + " - " + email); teste console //


}

/* formulario login Modal */

  /* $(document).ready(function() {
    // Manipulador de evento para o botão de login
    $("#btnLogin").click(function() {
      // Exibe o modal
      $("#loginModal").modal("show");
    });

    // Evento submit do formulário de login
    $(".login-usuario-form").submit(function(event) {
      // Impede o envio do formulário (você pode adicionar lógica de autenticação aqui)
      event.preventDefault();

      // Adicione a lógica de autenticação aqui, se necessário

      // Fecha o modal após a lógica de autenticação (ou faça ajustes conforme necessário)
      $("#loginModal").modal("hide");
    });
  });
*/
  
 
