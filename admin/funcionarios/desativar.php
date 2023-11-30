
<?php

$id = $_GET["id"];
//echo $id;
require_once("class/funcionario.php");
$funcionario = new FuncionarioClass($id);


if (isset($_POST['idFuncionario']))

   




    $funcionario->idFuncionario = $idFuncionario;
   

    $funcionario->Desativar();







?>






























