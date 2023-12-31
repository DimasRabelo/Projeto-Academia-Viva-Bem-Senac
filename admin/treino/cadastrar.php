<?php
if (isset($_POST['dataInicioTreino'])) {




    $dataInicioTreino      = $_POST['dataInicioTreino'];
    $dataFimTreino = $_POST['dataFimTreino'];
    $statusTreino = $_POST['statusTreino'];
    $idAluno         = $_POST['idAluno'];
    $idFuncionario       = $_POST['idFuncionario'];
    


    require_once('class/treino.php');

    $treino = new TreinoClass();

    $treino->dataInicioTreino = $dataInicioTreino;
    $treino->dataFimTreino = $dataFimTreino;
    $treino->statusTreino = $statusTreino;
    $treino->idAluno = $idAluno;
    $treino->idFuncionario = $idFuncionario;
   

    $treino->Cadastrar();
}


?>




<h1 class="h1Geral">Cadastrar Treino</h1>

<div class="formContainer">




    <form class="formMatri" action="index.php?p=treino&t=cadastrar" method="POST" enctype="multipart/form-data">



        <div>
            <label class="labelMatri"   for="dataInicioTreino" class="form-label">Data de Início</label>
            <input class="inputMatriDate"   type="date" name="dataInicioTreino" id="dataInicioTreino" required placeholder="data de Inicio">
        </div>

        <div>
            <label class="labelMatri"  for="dataFimTreino" class="form-label">Data do Fim</label>
            <input class="inputMatriDate"   type="date" name="dataFimTreino" id="dataFimTreino" required placeholder="data de final">
        </div>

        <div >

            <div>
                <select class="selectTreinoStatus" class="selectMatriStatus"    aria-label="Default select example" name="statusTreino" required>
                    <option selected="">Selecione o Status do Treino</option>
                    <option value="ATIVO">ATIVO</option>
                    <option value="DESATIVADO">DESATIVADO</option>
                    <option value="INATIVO">INATIVO</option>

                </select>
            </div>
        </div>


        <select class="selectMatri"   aria-label="Default select example" name="idAluno" id="idAluno" required>
            <option selected disabled>Seleciona o Aluno</option>

            <?php

            require_once('class/aluno.php');

            $alunoClass = new AlunoClass();
            $alunos = $alunoClass->listar();

            foreach ($alunos as $aluno) {
                echo "<option value='{$aluno['idAluno']}'>{$aluno['nomeAluno']}</option>";
            }
            ?>
        </select>

        <select class="selectMatri"  aria-label="Default select example" name="idFuncionario" id="idFuncionario" required>
            <option selected disabled>Selecionar o Funcionário</option>

            <?php

            require_once('class/funcionario.php');

            $funcionarioClass = new FuncionarioClass();
            $funcionarios = $funcionarioClass->listarFuncionario();

            foreach ($funcionarios as $funcionario) {
                echo "<option value='{$funcionario['idFuncionario']}'>{$funcionario['nomeFuncionario']}</option>";
            }
            ?>
        </select>




        <div >
            <button class="botMatri"  type="submit">Cadastrar Treino</button>
        </div>





    </form>

</div>



</div>