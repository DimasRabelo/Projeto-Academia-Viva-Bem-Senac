<h2> Página Desativar</h2>

<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    require_once("class/aluno.php");
    $aluno = new AlunoClass($id);

    $aluno->desativar();

    // Redireciona de volta para a lista após a desativação
    echo "<script>document.location='index.php?p=aluno'</script>";
    exit;
}

?>