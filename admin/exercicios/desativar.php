<h2>desativar</h2>

<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    require_once("class/exercicios.php");
    $exercicio = new ExerciciosClass($id);

    $exercicio->desativar();

    // Redireciona de volta para a lista após a desativação
    echo "<script>document.location='index.php?p=exercicios'</script>";
    exit;
}

?>


