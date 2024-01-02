<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    require_once("class/treino.php");
    $treino = new TreinoClass($id);

    $treino->desativar();

    // Redireciona de volta para a lista após a desativação
    echo "<script>document.location='index.php?p=treino'</script>";
    exit;
}

?>