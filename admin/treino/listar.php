<?php

require_once('class/treino.php');
$treino = new TreinoClass();
$lista = $treino->listar();

//var_dump($lista);






?>

<div>
    <a class="icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="index.php?p=treino&t=cadastrar">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-repeat" viewBox="0 0 16 16">
            <path d="M11 5.466V4H5a4 4 0 0 0-3.584 5.777.5.5 0 1 1-.896.446A5 5 0 0 1 5 3h6V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192Zm3.81.086a.5.5 0 0 1 .67.225A5 5 0 0 1 11 13H5v1.466a.25.25 0 0 1-.41.192l-2.36-1.966a.25.25 0 0 1 0-.384l2.36-1.966a.25.25 0 0 1 .41.192V12h6a4 4 0 0 0 3.585-5.777.5.5 0 0 1 .225-.67Z" />
        </svg>
        Novo Treino
    </a>


</div>
<style>
    th {
        font: 1.6em Arial;
        font-weight: bold;
    }

    td {
        font: 1.3em Helvetica;
        font-weight: bold;
    }
</style>






<div class=" table-responsive">
    <table class="table table-bordered border-primary">
        <caption> Lista de Treinos</caption>
        <thead>





            <tr>
                <th class="p-3 mb-2 bg-warning text-dark">Id Treino</th>
                <th class="p-3 mb-2 bg-warning text-dark">Início do Treino</th>
                <th class="p-3 mb-2 bg-warning text-dark">Fim do Treino</th>
                <th class="p-3 mb-2 bg-warning text-dark">Status do Treino </th>
                <th class="p-3 mb-2 bg-warning text-dark">Nome do Aluno</th>
                <th class="p-3 mb-2 bg-warning text-dark">Nome do Funcionário</th>
                <th class="p-3 mb-2 bg-warning text-dark">Atualizar</th>
                <th class="p-3 mb-2 bg-warning text-dark">Desativar</th>



            </tr>
        </thead>
        <?php foreach ($lista as $linha) : ?>
            <tbody>
                <tr>


                    <td class="bg-info"><?php echo $linha['idTreino'] ?></td>
                    <td class="table-info"><?php echo date('d/m/Y', strtotime($linha['dataInicioTreino'])) ?></td>
                    <td class="table-info"><?php echo date('d/m/Y', strtotime($linha['dataFimTreino'])) ?></td>
                    <td class="table-info"><?php echo $linha['statusTreino'] ?></td>
                    <td class="table-info"><?php echo $linha['nomeAluno'] ?></td>
                    <td class="table-info"><?php echo $linha['nomeFuncionario'] ?></td>



                    <td class="table-info"> <a class="icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="index.php?p=treino&t=atualizar">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-repeat" viewBox="0 0 16 16">
                                <path d="M11 5.466V4H5a4 4 0 0 0-3.584 5.777.5.5 0 1 1-.896.446A5 5 0 0 1 5 3h6V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192Zm3.81.086a.5.5 0 0 1 .67.225A5 5 0 0 1 11 13H5v1.466a.25.25 0 0 1-.41.192l-2.36-1.966a.25.25 0 0 1 0-.384l2.36-1.966a.25.25 0 0 1 .41.192V12h6a4 4 0 0 0 3.585-5.777.5.5 0 0 1 .225-.67Z" />
                            </svg>
                            Atualizar
                        </a>
                    </td>
                    <td class="table-info"> <a class="icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="index.php?p=treino&t=desativar">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-repeat" viewBox="0 0 16 16">
                                <path d="M11 5.466V4H5a4 4 0 0 0-3.584 5.777.5.5 0 1 1-.896.446A5 5 0 0 1 5 3h6V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192Zm3.81.086a.5.5 0 0 1 .67.225A5 5 0 0 1 11 13H5v1.466a.25.25 0 0 1-.41.192l-2.36-1.966a.25.25 0 0 1 0-.384l2.36-1.966a.25.25 0 0 1 .41.192V12h6a4 4 0 0 0 3.585-5.777.5.5 0 0 1 .225-.67Z" />
                            </svg>
                            Desativar
                        </a>
                    </td>
                </tr>


            <?php endforeach ?>
            </tbody>


    </table>
</div