<h2>Desativar</h2>

<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    require_once("class/matriculas.php");
    $matriculas = new MatriculasClass($id);

    $matriculas->desativar();

    // Redireciona de volta para a lista após a desativação
    echo "<script>document.location='index.php?p=matriculas'</script>";
    exit;
}

?>