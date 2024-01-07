<?php

require_once('class/funcionario.php');
$funcionarios = new FuncionarioClass();
$lista = $funcionarios->listarFuncionario();

//var_dump($lista)



?>




<div>
    <a class="icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="index.php?p=funcionarios&i=cadastrar">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-repeat" viewBox="0 0 16 16">
            <path d="M11 5.466V4H5a4 4 0 0 0-3.584 5.777.5.5 0 1 1-.896.446A5 5 0 0 1 5 3h6V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192Zm3.81.086a.5.5 0 0 1 .67.225A5 5 0 0 1 11 13H5v1.466a.25.25 0 0 1-.41.192l-2.36-1.966a.25.25 0 0 1 0-.384l2.36-1.966a.25.25 0 0 1 .41.192V12h6a4 4 0 0 0 3.585-5.777.5.5 0 0 1 .225-.67Z" />
        </svg>
        Novo Funcionario
    </a>


</div>





<div class="table-responsive">
    <table class="table table-bordered border-primary">
        <caption> Lista de funcionarios</caption>

        <thead>

            <tr>
                <th class="p-3 mb-2 bg-warning text-dark">Id</th>
                <th class="p-3 mb-2 bg-warning text-dark">Nome</th>
                <th class="p-3 mb-2 bg-warning text-dark">Data de Nascimento</th>
                <th class="p-3 mb-2 bg-warning text-dark">Cargo</th>
                <th class="p-3 mb-2 bg-warning text-dark">Especialidade</th>
                <th class="p-3 mb-2 bg-warning text-dark">E-mail</th>
                <th class="p-3 mb-2 bg-warning text-dark">Nível</th>
                <th class="p-3 mb-2 bg-warning text-dark">Telefone</th>

                <th class="p-3 mb-2 bg-warning text-dark">Foto</th>
                <th class="p-3 mb-2 bg-warning text-dark">Status</th>
                <th class="p-3 mb-2 bg-warning text-dark">Data de Admissão</th>
                <th class="p-3 mb-2 bg-warning text-dark">Atualizar</th>
                <th class="p-3 mb-2 bg-warning text-dark">Desativar</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lista as $linha) : ?>

                <tr>
                    <td class="table-info"><?php echo $linha['idFuncionario'] ?></td>
                    <td class="table-info"><?php echo $linha['nomeFuncionario'] ?></td>
                    <td class="table-info"><?php echo date('d/m/Y', strtotime($linha['dataNascFuncionario'])) ?></td>
                    <td class="table-info"><?php echo $linha['cargoFuncionario'] ?></td>
                    <td class="table-info"><?php echo $linha['especialidadeFuncionario'] ?></td>
                    <td class="table-info"><?php echo $linha['emailFuncionario'] ?></td>
                    <td class="table-info"><?php echo $linha['nivelFuncionario'] ?></td>
                    <td class="table-info"><?php echo $linha['telefoneFuncionario'] ?></td>
                    <td class="tamanhoFoto">
                        <a href="../img/<?php echo $linha['fotoFuncionario'] ?>" data-lightbox="<?php echo $linha['nomeFuncionario'] ?>" data-title="<?php echo $linha['nomeFuncionario'] ?>">
                            <img src="../img/<?php echo $linha['fotoFuncionario'] ?>" data-alt="<?php echo $linha['nomeFuncionario'] ?>">
                        </a>
                    </td>
                    <td class="table-info"><?php echo $linha['statusFuncionario'] ?></td>
                    <td class="table-info"><?php echo date('d/m/Y', strtotime($linha['dataAdmissaoFuncionario'])) ?></td>
                    <td class="table-info">
                        <a class="icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="index.php?p=funcionarios&i=atualizar&id=<?php echo $linha['idFuncionario'] ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-repeat" viewBox="0 0 16 16">
                                <path d="M11 5.466V4H5a4 4 0 0 0-3.584 5.777.5.5 0 1 1-.896.446A5 5 0 0 1 5 3h6V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192Zm3.81.086a.5.5 0 0 1 .67.225A5 5 0 0 1 11 13H5v1.466a.25.25 0 0 1-.41.192l-2.36-1.966a.25.25 0 0 1 0-.384l2.36-1.966a.25.25 0 0 1 .41.192V12h6a4 4 0 0 0 3.585-5.777.5.5 0 0 1 .225-.67Z" />
                            </svg>
                            Atualizar
                        </a>
                    </td>
                    <td class="table-info">
                        <a class="icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="index.php?p=funcionarios&i=desativar&id=<?php echo $linha['idFuncionario'] ?>" onclick="return confirmarDesativacao()">
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
</div>