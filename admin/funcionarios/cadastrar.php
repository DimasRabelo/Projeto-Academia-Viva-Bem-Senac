<?php
if (isset($_POST['nomeFuncionario'])) {




    $nomeFuncionario  = $_POST['nomeFuncionario'];
    $altFuncionario = $_POST['altFuncionario'];
    $dataNascFuncionario = $_POST['dataNascFuncionario'];
    $cargoFuncionario = $_POST['cargoFuncionario'];
    $especialidadeFuncionario = $_POST['especialidadeFuncionario'];
    $emailFuncionario = $_POST['emailFuncionario'];
    $senhaFuncionario = $_POST['senhaFuncionario'];
    $nivelFuncionario = $_POST['nivelFuncionario'];
    $telefoneFuncionario = $_POST['telefoneFuncionario'];
    $dataAdmissaoFuncionario = $_POST['dataAdmissaoFuncionario'];
    $statusFuncionario = $_POST['statusFuncionario'];
    $fotoFuncionario = $_POST['fotoFuncionario'];
    





    // Foto
    $arquivo    = $_FILES['fotoFuncionario'];

    if ($arquivo['error']) {
        throw new Exception('Error' . $arquivo['error']);
    }
    if (move_uploaded_file($arquivo['tmp_name'], '../img/funcionario/' . $arquivo['name'])) {
        $fotoFuncionario = 'funcionario/' . $arquivo['name'];
    } else {
        throw new Exception('Erro: Não foi possível realizar o upload da imagem.');
    }

    require_once('class/funcionario.php');

    $funcionario = new FuncionarioClass();

    $funcionario->nomeFuncionario = $nomeFuncionario;
    $funcionario->altFuncionario = $nomeFuncionario;
    $funcionario->dataNascFuncionario = $dataNascFuncionario;
    $funcionario->cargoFuncionario = $cargoFuncionario;
    $funcionario->especialidadeFuncionario = $especialidadeFuncionario;
    $funcionario->emailFuncionario = $emailFuncionario;
    $funcionario->senhaFuncionario = $senhaFuncionario;
    $funcionario->nivelFuncionario = $nivelFuncionario;
    $funcionario->telefoneFuncionario = $telefoneFuncionario;
    $funcionario->dataAdmissaoFuncionario = $dataAdmissaoFuncionario;
    $funcionario->statusFuncionario = $statusFuncionario;
    $funcionario->fotoFuncionario = $fotoFuncionario;
    

    $funcionario->Cadastrar();
}

?>

<h1 class="h1Geral">Cadastrar Funcionário</h1>

<form class="formfunc" action="index.php?p=funcionarios&i=cadastrar" method="POST" enctype="multipart/form-data">

    <div class="input-group mb-3">
        <div class="tamanhoFotoCad">
            <img src="img/sem-foto.jpg" alt="..." id="imgfoto">
        </div>
        <input type="file" class="form-control" id="fotoFuncionario" name="fotoFuncionario" required style="display:none;">
    </div>


    <div class="setecamposesquerda">
        <div class="mb-3">
            <label class="labelfunc" for="nomeFuncionario" class="form-label">Nome do Funcionário</label>
            <input class="inputfunc" type="text" class="form-control" name="nomeFuncionario" id="nomeFuncionario" required placeholder="Informe Nome do Funcionario">
        </div>
        <div class="mb-3">
            <label class="labelfunc" for="dataNascFuncionario" class="form-label">Data de Nascimento</label>
            <input class="inputdatafunc" type="date" class="form-control" name="dataNascFuncionario" id="dataNascFuncionario" required placeholder="Sua Data de Nascimento">
        </div>
        <div class="mb-3">
            <label class="labelfunc" for="cargoFuncionario" class="form-label">Cargo do Funcionário</label>
            <input class="inputfunc" type="text" class="form-control" name="cargoFuncionario" id="cargoFuncionario" required placeholder="Informe o Cargo do Funcionario">
        </div>
        <div class="mb-3">
            <label class="labelfunc" for="especialidadeFuncionario" class="form-label">Especialidade do Funcionário</label>
            <input class="inputfunc" type="text" class="form-control" name="especialidadeFuncionario" id="especialidadeFuncionario" required placeholder="Informe a especialidade do Funcionario">
        </div>
        <div class="mb-3">
            <label class="labelfunc" for="emailFuncionario" class="form-label">Endereço de Email </label>
            <input class="inputfunc" type="email" class="form-control" name="emailFuncionario" id="emailFuncionario" required placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label class="labelfunc" for="inputPassword" class="form-label">Digite Sua Senha</label>
            <div class="col-sm-10">
                <input class="inputsenha" type="password" class="form-control" id="inputPassword" required placeholder="digite sua senha">
                <p>Sua senha deve ter de 8 a 20 caracteres, conter letras e números e não deve conter espaços, caracteres especiais ou emoji.</p>
            </div>
        </div>
        <div class="mb-3">
            <label class="labelfunc" for="nivelFuncionario" class="form-label">Nivel do Funcionário</label>
            <input class="inputfunc" type="text" class="form-control" name="nivelFuncionario" id="nivelFuncionario" required placeholder="Informe o Nivel do Funcionario">
        </div>

    </div>

    <div class=" direita">
        <div class="mb-3">
            <label for="telefoneFuncionario">Telefone:</label>
            <input type="tel" class="form-control" name="telefoneFuncionario" id="telefoneFuncionario" placeholder="(11)99999-999">
        </div>
        <div class="mb-3">
            <label class="labelfunc" for="dataAdmissaoFuncionario" class="form-label">Data de Admissão</label>
            <input class="inputdatafuncAdmis" type="date" class="form-control" name="dataAdmissaoFuncionario" id="dataAdmissaoFuncionario" required placeholder="data de admissão">
        </div>
        <div class="selecaofunc" class="form-group col-sm-6 offset-md-2">
            <select class="form-select col-sm-2" aria-label="Default select example" name="statusFuncionario" required>
                <option selected="">Seleciona o Status do Funcionario</option>
                <option value="ATIVO">ATIVO</option>
                <option value="DESATIVADO">DESATIVADO</option>
                <option value="INATIVO">INATIVO</option>
            </select>
        </div>
        
        



        <div class="botaocad">
            <button type="submit" class="btn btn-primary">Cadastrar Funcionário</button>
        </div>
    </div>
</form>

<script>
    // Evento de Clique
    document.getElementById('imgfoto').addEventListener('click', function() {
        document.getElementById('fotoFuncionario').click();
    });

    // Evento de Alteração Mudar
    document.getElementById('fotoFuncionario').addEventListener('change', function(a) {
        let imgfoto = document.getElementById('imgfoto');
        let arquivo = a.target.files[0]; // Get the selected file

        if (arquivo) {
            let carregar = new FileReader();

            carregar.onload = function(a) {
                imgfoto.src = a.target.result;
                //console.log(imgFoto.src);
            }

            carregar.readAsDataURL(arquivo);
        }
    });
</script>