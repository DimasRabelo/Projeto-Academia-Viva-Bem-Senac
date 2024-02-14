<?php
session_start();

<<<<<<< Updated upstream
if (isset($_SESSION['idAluno'])) {
    $id = $_SESSION['idAluno'];
   var_dump('ID do Aluno: ' . $id);
} elseif (isset($_SESSION['idFuncionario'])) {
    $id = $_SESSION['idFuncionario'];
    var_dump('ID do Funcionário: ' . $id);
} else {
    header("location: http://localhost/Projeto-Academia-Viva-Bem-Senac/admin/loginAdmin.php");
=======
if(isset($_SESSION['idAluno']))
{
    echo "cheguei Aqui";
}else{
    header("location:http://localhost/Projeto-Academia-Viva-Bem-Senac/admin/login.php");
>>>>>>> Stashed changes
    exit();
}

$pagina = @$_GET['p'];

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD ACADEMIA VIVA BEM</title>

    <link rel="stylesheet" href="./css/reset.css">
    <link href="path/to/lightbox.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- estilo css sempre o último -->

    <link rel="stylesheet" href="./css/estilo.css">

</head>

<body>

    <header class="topo">
        <h1>
            <img src="./img/logoVivaBem.svg" alt="Logo Viva Bem">
        </h1>
        <?php
        if ($pagina == '') {
            echo '<h2>Dashboard</h2>';
        } else {
            echo ('<h2>Página: ' . $pagina . '</h2>');
        }

        ?>
        <div>
            <img src="./img/btnLogin.png" alt="User Instrutor">
            <h2>Nome:</h2>
        </div>
    </header>

    <main>
        <div class="menu">
            <nav>
                <ul>
                    <li><a href="index.php?p=dashboard" class="<?php echo (($pagina == 'dashboard') ||  (@$pagina == '')) ? 'menuAtivo' : ''; ?>"> Dashboard </a></li>
                    <li><a href="index.php?p=matriculas" class="<?php echo ($pagina == 'matriculas') ? 'menuAtivo' : ''; ?>"> Matrículas </a></li>
                    <li><a href="index.php?p=exercicios" class="<?php echo ($pagina == 'exercicios') ? 'menuAtivo' : ''; ?>"> Exercícios </a></li>
                    <li><a href="index.php?p=aulas" class="<?php echo ($pagina == 'aulas') ? 'menuAtivo' : ''; ?>"> Aulas </a></li>
                    <li><a href="index.php?p=treino" class="<?php echo ($pagina == 'treino') ? 'menuAtivo' : ''; ?>"> Treinos </a></li>
                    <li><a href="index.php?p=funcionarios" class="<?php echo ($pagina == 'funcionarios') ? 'menuAtivo' : ''; ?>"> Funcionários </a></li>
                    <li><a href="index.php?p=instrutores" class="<?php echo ($pagina == 'instrutores') ? 'menuAtivo' : ''; ?>"> Instrutores </a></li>
                    <li><a href="index.php?p=aluno" class="<?php echo ($pagina == 'aluno') ? 'menuAtivo' : ''; ?>"> Alunos </a></li>
                    <li><a href="index.php?p=pagamento" class="<?php echo ($pagina == 'pagamento') ? 'menuAtivo' : ''; ?>"> Pagamentos </a></li>
                    <li><a href="index.php?p=relatorio" class="<?php echo ($pagina == 'relatorio') ? 'menuAtivo' : ''; ?>"> Relatório </a></li>
                    <li><a href="index.php?p=contato" class="<?php echo ($pagina == 'contato') ? 'menuAtivo' : ''; ?>"> E-mail </a></li>
                    <li><a href="index.php?p=ajuda" class="<?php echo ($pagina == 'ajuda') ? 'menuAtivo' : ''; ?>"> Ajuda e Suporte </a></li>
                </ul>
            </nav>
        </div>
        <div class="box">
            <!-- CONTEÚDO DAS PÁGINAS -->

            <?php

            switch ($pagina) {
                case 'dashboard':

                    break;
                case 'matriculas':
                    require_once('matriculas/matriculas.php');
                    break;

                case 'exercicios':
                    require_once('exercicios/exercicios.php');
                    break;

                case 'aulas':

                    break;
                case 'treino':
                    require_once('treino/treino.php');
                    break;
                case 'funcionarios':
                    require_once('funcionarios/funcionarios.php');
                    break;
                case 'instrutores':
                    require_once('instrutores/instrutores.php');
                    break;

                case 'aluno':
                    require_once('aluno/aluno.php');

                    break;
                case 'pagamento':

                    break;
                case 'relatorio':

                    break;
                case 'contato':

                    require_once('contato/contato.php');
                    break;
                case 'ajuda':
            }
            ?>

        </div>
    </main>



    <!-- RODAPÉ -->
    <footer class="rodape">
        <h2>Direitos reservados TI21 - Senac SMP</h2>
        <h2>Desenvolvido por Alessandro e Ricardo</h2>
    </footer>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="path/to/lightbox.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>