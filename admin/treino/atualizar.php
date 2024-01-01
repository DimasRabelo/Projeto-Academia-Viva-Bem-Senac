<?php

$id = $_GET["id"];
//echo $id;
require_once("class/treino.php");
$treino = new TreinoClass($id);


if (isset($_POST['dataInicioTreino'])) {




    $dataInicioTreino      = $_POST['dataInicioTreino'];
    $dataFimTreino = $_POST['dataFimTreino'];
    $statusTreino = $_POST['statusTreino'];
    $idAluno         = $_POST['idAluno'];
    $idFuncionario       = $_POST['idFuncionario'];
    

    $treino->dataInicioTreino = $dataInicioTreino;
    $treino->dataFimTreino = $dataFimTreino;
    $treino->statusTreino = $statusTreino;
    $treino->idAluno = $idAluno;
    $treino->idFuncionario = $idFuncionario;
   

    $treino->Atualizar();
}


?>




<h1 class="h1Geral">Atualizar Treino</h1>

<div class="formContainer">




    <form class="formMatri" action="index.php?p=treino&t=atualizar&id=<?php echo $treino->idTreino; ?>" method="POST" enctype="multipart/form-data">



        <div>
            <label class="labelMatri"   for="dataInicioTreino" class="form-label">Data de Início</label>
            <input class="inputMatriDate"   type="date" name="dataInicioTreino" id="dataInicioTreino" placeholder="data de Inicio" value="<?php echo $treino->dataInicioTreino; ?>">
        </div>

        <div>
            <label class="labelMatri"  for="dataFimTreino" class="form-label">Data do Fim</label>
            <input class="inputMatriDate"   type="date" name="dataFimTreino" id="dataFimTreino"  placeholder="data de final" value="<?php echo $treino->dataFimTreino; ?>">
        </div>

        <div >

            <div>
                <select class="selectTreinoStatus" class="selectMatriStatus"    aria-label="Default select example" name="statusTreino" >
                    <option selected="">Selecione o Status do Treino</option>
                    <option value="ATIVO">ATIVO</option>
                    <option value="DESATIVADO">DESATIVADO</option>
                    <option value="INATIVO">INATIVO</option>

                </select>
            </div>
        </div>


        <div>
            <label for="idAluno"> Id Aluno</label>
            <input  type="text" name="idAluno" id="idAluno" placeholder="nome do Aluno" value="<?php echo $treino->idAluno; ?>">
        </div>

        <div>
            <label for="idFuncionario"> Id Funcionário</label>
            <input  type="text" name="idFuncionario" id="idFuncionario" placeholder="nome do Funcionario" value="<?php echo $treino->idAluno; ?>">
        </div>
        
        <div >
            <button class="botMatri"  type="submit">Atualizar</button>
        </div>





    </form>

</div>



</div>