<?php
if (isset($_POST['dataInicioMatricula'])) {




    $dataInicioMatricula      = $_POST['dataInicioMatricula'];
    $dataFimMatricula = $_POST['dataFimMatricula'];
    $statusMatricula = $_POST['statusMatricula'];
    $idAluno         = $_POST['idAluno'];
    $idPlano        = $_POST['idPlano'];
    $valorPago         = $_POST['valorPago'];


    require_once('class/matriculas.php');

    $matriculas = new MatriculasClass();

    $matriculas->dataInicioMatricula = $dataInicioMatricula;
    $matriculas->dataFimMatricula = $dataFimMatricula;
    $matriculas->statusMatricula = $statusMatricula;
    $matriculas->idAluno = $idAluno;
    $matriculas->idPlano = $idPlano;
    $matriculas->valorPago = $valorPago;

    $matriculas->Cadastrar();
}



?>


<h1 class="h1Geral">Cadastrar Novas Matrículas</h1>

<div class="formContainer">


    <form class="formMatri" action="index.php?p=matriculas&m=cadastrar" method="POST" enctype="multipart/form-data">



        <div>
            <label class="labelMatri" for="dataInicioMatricula">Data de Início</label>
            <input class="inputMatriDate" type="date" name="dataInicioMatricula" id="dataInicioMatricula" required placeholder="data de Inicio">
        </div>

        <div>
            <label class="labelMatri" for="dataFimMatricula">Data do Fim</label>
            <input class="inputMatriDate" type="date" name="dataFimMatricula" id="dataFimMatricula" required placeholder="data de final">
        </div>

        <div>
            <select class="selectMatriStatus" aria-label="Default select example" name="statusMatricula" required>
                <option selected="">Seleciona o Status da Matrícula</option>
                <option value="ATIVO">ATIVO</option>
                <option value="DESATIVADO">DESATIVADO</option>
                <option value="INATIVO">INATIVO</option>

            </select>
        </div>

        <div>

            <select class="selectMatri"  aria-label="Default select example" name="idAluno" id="idAluno" required>
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

            <select  class="selectMatri" aria-label="Default select example" name="idPlano" id="idPlano" required>
                <option selected disabled>Selecionar o Plano</option>

                <?php
                require_once('class/plano.php');
                $planoClass = new PlanoClass();
                $planos = $planoClass->listarPlanos();

                foreach ($planos as $plano) {
                    echo "<option value='{$plano['idPlano']}'>{$plano['nomePlano']}</option>";
                }
                ?>
            </select>

            <div>
                <label class="labelMatri" for="valorPago">Valor Pago:</label>
                <input class="inputMatriDate" type="number" step="0.01" pattern="\d+(\.\d{2})?" name="valorPago" id="valorPago" required>
            </div>




            <div>
                <button class="botMatri" type="submit">Cadastrar Matrícula</button>
            </div>

        </div>



    </form>


</div>