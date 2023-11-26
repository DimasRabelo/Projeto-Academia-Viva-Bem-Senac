<?php

require_once('class/exercicios.php');
$exercicios = new ExerciciosClass();
$lista = $exercicios->Listar();

//var_dump($lista)








?>







<div>
    <a class="icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="index.php?p=exercicios&e=cadastrar">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-repeat" viewBox="0 0 16 16">
            <path d="M11 5.466V4H5a4 4 0 0 0-3.584 5.777.5.5 0 1 1-.896.446A5 5 0 0 1 5 3h6V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192Zm3.81.086a.5.5 0 0 1 .67.225A5 5 0 0 1 11 13H5v1.466a.25.25 0 0 1-.41.192l-2.36-1.966a.25.25 0 0 1 0-.384l2.36-1.966a.25.25 0 0 1 .41.192V12h6a4 4 0 0 0 3.585-5.777.5.5 0 0 1 .225-.67Z" />
        </svg>
        Novo Exercício
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


    .fotoexer {
        width: 100%;
        height: 100%;
    }
    .fotoexer img {
        max-width: 220px;
        max-height: 220px;
    }
</style>




<div class=" table-responsive">
    <table class="table table-bordered border-primary">
        <caption> Lista de Exercicios</caption>
        <thead>





            <tr class=" tituloexercicio">

                <th class="p-3 mb-2 bg-warning text-dark">Id Exercícios</th>
                <th class="p-3 mb-2 bg-warning text-dark">Nome</th>
                <th class="p-3 mb-2 bg-warning text-dark">Descrição</th>
                <th class="p-3 mb-2 bg-warning text-dark">Categoria</th>
                <th class="p-3 mb-2 bg-warning text-dark">Status</th>
                <th class="p-3 mb-2 bg-warning text-dark">Foto</th>
                <th class="p-3 mb-2 bg-warning text-dark">Link dos Exercicios</th>
                <th class="p-3 mb-2 bg-warning text-dark">Atualizar</th>
                <th class="p-3 mb-2 bg-warning text-dark">Desativar</th>
            </tr>
        </thead>
        <?php foreach ($lista as $linha) : ?>
            <tbody>
                <tr class="table-secondary">
                    <td class="bg-info"><?php echo $linha['idExercicio'] ?></td>
                    <td class="table-info"><?php echo $linha['nomeExercicio'] ?></td>
                    <td class="table-info"><?php echo $linha['descricaoExercicio'] ?></td>
                    <td class="table-info"><?php echo $linha['grupoMuscularExercicio'] ?></td>
                    <td class="table-info"><?php echo $linha['statusExercicio'] ?></td>
                    <td class="fotoexer">
                        <a href="../img/<?php echo $linha['fotoExercicio'] ?>"
                         data-lightbox="<?php echo $linha['nomeExercicio'] ?>" 
                         data-title="<?php echo $linha['nomeExercicio'] ?>">
                            <img src="../img/<?php echo $linha['fotoExercicio'] ?>" alt="<?php echo $linha['nomeExercicio'] ?> ">
                        </a>

                    </td>
                    <td class="table-info"><?php echo $linha['linkExercicio'] ?></td>

                    <td class="table-info"> <a class="icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="index.php?p=exercicios&e=atualizar&id=<?php echo $linha['idExercicio'] ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-repeat" viewBox="0 0 16 16">
                                <path d="M11 5.466V4H5a4 4 0 0 0-3.584 5.777.5.5 0 1 1-.896.446A5 5 0 0 1 5 3h6V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192Zm3.81.086a.5.5 0 0 1 .67.225A5 5 0 0 1 11 13H5v1.466a.25.25 0 0 1-.41.192l-2.36-1.966a.25.25 0 0 1 0-.384l2.36-1.966a.25.25 0 0 1 .41.192V12h6a4 4 0 0 0 3.585-5.777.5.5 0 0 1 .225-.67Z" />
                            </svg>
                            Atualizar
                        </a>
                    </td>
                    <td class="table-info"> <a class="icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="index.php?p=exercicios&e=desativar&id<?php echo $linha['idExercicio'] ?>">
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