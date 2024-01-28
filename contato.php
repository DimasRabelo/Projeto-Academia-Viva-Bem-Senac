<?php
//Importe classes PHPMailer para o namespace global
//Eles devem estar no topo do seu script, não dentro de uma função
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


$ok = 0;



if (isset($_POST['email'])) {

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $fone = $_POST['fone'];
        $mens = $_POST['mens'];  
        $assunto = 'site academia viva bem';

        require_once('admin/class/contato.php');

        $contato = new ContatoClass ();

        $contato->nomeContato = $nome;
        $contato->emailContato = $email;
        $contato->telefoneContato = $fone;
        $contato->mensagemContato = $mens;

        $contato->Inserir();

    require_once('mailer/Exception.php');
    require_once('mailer/PHPMailer.php');
    require_once('mailer/SMTP.php');

    //Crie uma instância; passar `true (verdadeiro)`
     $mail = new PHPMailer(true);


     try {
        //Configurações do servidor
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Habilita saída de depuração detalhada
        $mail->isSMTP();                                            //Enviar usando SMTP
        $mail->Host       = 'smtp.hostinger.com';                   //Defina o servidor SMTP para enviar
        $mail->SMTPAuth   = true;                                   //Habilitar autenticação SMTP
        $mail->Username   = 'vivabem@ti21.smpsistema.com.br';       //SMTP nome de usuário
        $mail->Password   = 'Senac@ti21';                           //SMTP senha
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Habilitar criptografia TLS implícita
        $mail->Port       = 465;                                    //Porta TCP para conexão

        //Destinatários
        $mail->setFrom('vivabem@ti21.smpsistema.com.br', $assunto);		    // Quem dispara o email
        $mail->addAddress('imediato.2022@gmail.com');     //Adicionar um destinatário


        //Conteúdo do email
        $mail->isHTML(true);                                  	    //Defina o formato do e-mail para HTML
        $mail->Subject = &$assunto;
        
	//Conteúdo HTML
	$mail->Body    = "        
            <strong>Nome: </strong> $nome <br>
            <strong>Email:</strong> $email <br>
            <strong>Telefone:</strong> $fone <br>
            <strong>Mensagem:</strong> $mens
        ";
	//Sem formatação HTML
        $mail->AltBody = "
            <strong>Nome: </strong> $nome <br>
            <strong>Email:</strong> $email <br>
            <strong>Telefone:</strong> $fone <br>
            <strong>Mensagem:</strong> $mens
        ";

        $mail->send();
        //echo 'Email enviado com Sucesso!';
        $ok = 1;
    } catch (Exception $e) {
        //echo "Error: {$mail->ErrorInfo}";
        $ok = 2;
    }

}




?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.::Projeto TI21::.</title>
    <link rel="stylesheet" href="css/reset.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/lity.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="path/to/lightbox.css" rel="stylesheet" />

    <!-- Nosso estilo é sempre o último-->
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/responsivo.css">


</head>

<body>
    <!-- CABEÇALHO -->
    <?php require_once('conteudo/topo.php'); ?>
    <!-- CORPO -->
    <main>
       
        <!-- MAPA -->
        <section class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.0254648900845!2d-46.43443702384096!3d-23.495592259180818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce63dda7be6fb9%3A0xa74e7d5a53104311!2sSenac%20S%C3%A3o%20Miguel%20Paulista!5e0!3m2!1spt-BR!2sbr!4v1695814048564!5m2!1spt-BR!2sbr" width="100%" height="700" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>

        <section class="contato">
            <div class="site">
                <h2>Contato</h2>
                
                <h4>
                                    </h4>
                <div>
                    <form action="#" method="POST">
                        <div>
                            <div>
                                <label for="nome">Nome:</label>
                                <input type="text" name="nome" id="nome" placeholder="*Informe seu nome: " required>
                            </div>
                            <div>
                                <label for="email">E-mail:</label>
                                <input type="email" name="email" id="email" placeholder="*Informe seu e-mail: " required>
                            </div>
                            <div>
                                <label for="fone">Telefone:</label>
                                <input type="tel" name="fone" id="fone" placeholder="Informe seu telefone: ">
                            </div>
                        </div>

                        <div>
                            <div>
                                <label for="mens">Mensagem:</label>
                                <textarea name="mens" id="mens" cols="30" rows="10"></textarea>
                            </div>
                            <div class="btnContato">
                                <input type="submit" value="Enviar por e-mail">
                                <input type="button" value="Enviar por whatsApp" onclick="EnviarWhats()">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>



        <!-- SERVIÇO -->
        <section class="contServico wow animate__animated animate__fadeInUp">
            <div class="site">
                <h2>Treinos</h2>
                <div>
                    <div>
                        <h3>Pilates</h3>
                        <img src="img/servico1.png" alt="Img serviço na cor azul clara">
                        <p>Descubra a harmonia entre corpo e mente com nossas aulas de Pilates. Fortaleça seu núcleo,
                            melhore sua postura e aumente a flexibilidade, encontre o equilíbrio interior. Nossos
                            instrutores especializados guiarão você em uma jornada de consciência corporal e bem-estar.
                        </p>
                        <button>conheça</button>
                    </div>
                    <div>
                        <h3>Musculação</h3>
                        <img src="img/servico2.png" alt="Img serviço na cor azul clara">
                        <p>Aproveite ao máximo sua jornada de condicionamento físico com nosso programa de musculação.
                            Transforme seu corpo, construa músculos e aumente a resistência. Oferecemos equipamentos
                            modernos e orientação ideal para você alcançar seus objetivos.</p>
                        <button>conheça</button>
                    </div>
                    <div>
                        <h3>Dança</h3>
                        <img src="img/servico3.png" alt="Img serviço na cor azul clara">
                        <p>Liberte sua expressão e energia com nossas aulas de dança envolventes. Seja você um iniciante
                            ou um dançarino experiente, nossos instrutores apaixonados vão levá-lo a dançar com
                            confiança. Desperte sua paixão pela dança, queime calorias e divirta-se.</p>
                        <button>conheça</button>
                    </div>
                </div>
            </div>
        </section>
        <!-- GALERIA -->
        <section class="galeria wow animate__animated animate__fadeInUp">
            <img src="img/galeria1.png" alt="Img Galeria na cor azul clara">
            <img src="img/galeria2.png" alt="Img Galeria na cor azul clara">
            <img src="img/galeria3.png" alt="Img Galeria na cor azul clara">
            <img src="img/galeria4.png" alt="Img Galeria na cor azul clara">
            <img src="img/galeria5.png" alt="Img Galeria na cor azul clara">
            <img src="img/galeria6.png" alt="Img Galeria na cor azul clara">
            <img src="img/galeria7.png" alt="Img Galeria na cor azul clara">
            <img src="img/galeria1.png" alt="Img Galeria na cor azul clara">
            <img src="img/galeria2.png" alt="Img Galeria na cor azul clara">
            <img src="img/galeria3.png" alt="Img Galeria na cor azul clara">
            <img src="img/galeria4.png" alt="Img Galeria na cor azul clara">
            <img src="img/galeria5.png" alt="Img Galeria na cor azul clara">
            <img src="img/galeria6.png" alt="Img Galeria na cor azul clara">
            <img src="img/galeria7.png" alt="Img Galeria na cor azul clara">
        </section>
        <!-- EQUIPE -->
        <?php require_once('conteudo/equipe.php'); ?>

    <!-- RODAPÉ -->
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
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/lity.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="path/to/lightbox.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="js/animacoes.js"></script>

</body>

</html>