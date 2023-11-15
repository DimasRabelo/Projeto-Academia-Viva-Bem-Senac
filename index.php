
<?php


    require_once('admin/class/exercicios.php');

    $exercicios = new ExerciciosClass();
    $lista      = $exercicios->listar();


    //var_dump($lista);















?>




<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.::Projeto TI21::.</title>
    <link rel="stylesheet" href="css/reset.css">

    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/lity.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- Nosso estilo é sempre o último-->
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/responsivo.css">


</head>

<body>
    <!-- CABEÇALHO -->
    <?php require_once('conteudo/topo.php'); ?>
    <!-- CORPO -->
    <main>

        <!-- BANNER -->
        <?php require_once('conteudo/banner.php'); ?>
        <!-- SOBRE -->
        <?php require_once('conteudo/sobre-conteudo.php'); ?>
        <!-- SERVIÇO -->
        <?php require_once('conteudo/servico.php'); ?>
        <!-- GALERIA -->
        <?php require_once('conteudo/galeria.php'); ?>
        <!-- EQUIPE -->
        <?php require_once('conteudo/equipe.php'); ?>
        <!-- DESTAQUE -->
        <?php require_once('conteudo/destaque.php'); ?>
 </main>

    <!-- RODAPÉ -->
    <?php require_once('conteudo/rodape.php'); ?>

</body>

</html>