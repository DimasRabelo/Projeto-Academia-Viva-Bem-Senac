<?php

require_once('class/aluno.php');
$aluno = new AlunoClass();
$lista = $aluno->listar();

// var_dump($lista);






?>

<div>
    <a class="icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="index.php?p=aluno&aluno=cadastrar">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-repeat" viewBox="0 0 16 16">
            <path d="M11 5.466V4H5a4 4 0 0 0-3.584 5.777.5.5 0 1 1-.896.446A5 5 0 0 1 5 3h6V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192Zm3.81.086a.5.5 0 0 1 .67.225A5 5 0 0 1 11 13H5v1.466a.25.25 0 0 1-.41.192l-2.36-1.966a.25.25 0 0 1 0-.384l2.36-1.966a.25.25 0 0 1 .41.192V12h6a4 4 0 0 0 3.585-5.777.5.5 0 0 1 .225-.67Z" />
        </svg>
        Novo Aluno
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
    .fotodados {
        max-width: 300px;
        max-height: 320px;
    }
</style>






<div class=" table-responsive">
    <table class="table table-bordered border-primary">
        <caption> Lista de Alunos</caption>
        <thead>





            <tr>
                
                <th class="p-3 mb-2 bg-warning text-dark">Id Aluno</th>
                <th class="p-3 mb-2 bg-warning text-dark">Nome Aluno</th>
                <th class="p-3 mb-2 bg-warning text-dark">Data Nasc. Aluno</th>
                <th class="p-3 mb-2 bg-warning text-dark">Email do Aluno</th>
                <th class="p-3 mb-2 bg-warning text-dark">Data de Cadastramento do Aluno</th>
                <th class="p-3 mb-2 bg-warning text-dark">Status Aluno</th>
                <th class="p-3 mb-2 bg-warning text-dark">Foto do Aluno</th>
                <th class="p-3 mb-2 bg-warning text-dark">Atualizar</th>
                <th class="p-3 mb-2 bg-warning text-dark">Desativar</th>
                



            </tr>
        </thead>
        <?php foreach ($lista as $linha) : ?>
            <tbody>
                <tr>

                   
                    <td class="bg-info"><?php echo $linha['idAluno'] ?></td>
                    <td class="table-info"><?php echo $linha['nomeAluno'] ?></td>
                    <td class="table-info"><?php echo $linha['dataNascAluno'] ?></td>
                    <td class="table-info"><?php echo $linha['emailAluno'] ?></td>
                    <td class="table-info"><?php echo $linha['dataCadAluno'] ?></td>
                    <td class="table-info"><?php echo $linha['statusAluno'] ?></td>
                    <td >
                        <img class="fotodados" src="../img/<?php echo $linha['fotoAluno'] ?>" alt="<?php echo $linha['nomeAluno'] ?>">
                    </td>

                    <td class="table-info"> <a class="icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="index.php?p=aluno&aluno=atualizar">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-repeat" viewBox="0 0 16 16">
                                <path d="M11 5.466V4H5a4 4 0 0 0-3.584 5.777.5.5 0 1 1-.896.446A5 5 0 0 1 5 3h6V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192Zm3.81.086a.5.5 0 0 1 .67.225A5 5 0 0 1 11 13H5v1.466a.25.25 0 0 1-.41.192l-2.36-1.966a.25.25 0 0 1 0-.384l2.36-1.966a.25.25 0 0 1 .41.192V12h6a4 4 0 0 0 3.585-5.777.5.5 0 0 1 .225-.67Z" />
                            </svg>
                            Atualizar
                        </a>
                    </td>
                    <td class="table-info"> <a class="icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="index.php?p=aluno&aluno=desativar">
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