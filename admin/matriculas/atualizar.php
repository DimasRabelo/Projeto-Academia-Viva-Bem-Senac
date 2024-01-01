<?php

$id = $_GET["id"];
//echo $id;
require_once("class/matriculas.php");
$matriculas = new MatriculasClass($id);

//var_dump($matriculas->idMatricula);

if (isset($_POST['dataInicioMatricula'])) {

    $dataInicioMatricula      = $_POST['dataInicioMatricula'];
    $dataFimMatricula = $_POST['dataFimMatricula'];
    $statusMatricula = $_POST['statusMatricula'];
    $idAluno         = $_POST['idAluno'];
    $idPlano        = $_POST['idPlano'];
    $valorPago         = $_POST['valorPago'];


    $matriculas->dataInicioMatricula = $dataInicioMatricula;
    $matriculas->dataFimMatricula = $dataFimMatricula;
    $matriculas->statusMatricula = $statusMatricula;
    $matriculas->idAluno = $idAluno;
    $matriculas->idPlano = $idPlano;
    $matriculas->valorPago = $valorPago;

    $matriculas->Atualizar();
}



?>











<h1 class="h1Geral">Atualizar Matrículas</h1>

<div class="formContainer">


<form class="formMatri" action="index.php?p=matriculas&m=atualizar&id=<?php echo $matriculas->idMatricula ?>" method="POST" enctype="multipart/form-data">



        <div>
            <label class="labelMatri"  for="dataInicioMatricula">Data de Início</label>
            <input class="inputMatriDate" type="date" name="dataInicioMatricula" id="dataInicioMatricula" placeholder="data de Inicio" value="<?php echo $matriculas->dataInicioMatricula; ?>">
        </div>

        <div>
            <label class="labelMatri"  for="dataFimMatricula">Data do Fim</label>
            <input class="inputMatriDate" type="date" name="dataFimMatricula" id="dataFimMatricula" placeholder="data de final" value="<?php echo $matriculas->dataFimMatricula; ?>">
        </div>

        <div>
            <select class="selectMatriStatus"  aria-label="Default select example" name="statusMatricula">
                <option selected="">Seleciona o Status da Matrícula</option>
                <option value="ATIVO">ATIVO</option>
                <option value="DESATIVADO">DESATIVADO</option>
                <option value="INATIVO">INATIVO</option>

            </select>
        </div>

        <div>
            <label for="idAluno"> Id Aluno</label>
            <input  type="text" name="idAluno" id="idAluno" placeholder="nome do Aluno" value="<?php echo $matriculas->idAluno; ?>">
        </div>

        <div>
            <label for="idPlano"> ID Produto</label>
            <input  type="text" name="idPlano" id="idPlano" placeholder="nome do Plano" value="<?php echo $matriculas->idPlano; ?>">
        </div>



        <div>
            <label class="labelMatri"  for="valorPago">Valor Pago:</label>
            <input class="inputMatriDate" type="number" step="0.01" pattern="\d+(\.\d{2})?" name="valorPago" id="valorPago" value="<?php echo $matriculas->valorPago; ?>">
        </div>




        <div>
            <button class="botMatri" type="submit">Atualizar Matrícula</button>
        </div>

</div>



</form>


</div>