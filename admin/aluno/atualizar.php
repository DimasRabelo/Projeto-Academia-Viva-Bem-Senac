
<?php


$id = $_GET["id"];
// echo $id;
require_once("class/aluno.php");
$aluno = new AlunoClass($id);

//echo $aluno->nomeAluno;



if (isset($_POST['nomeAluno'])) {




    $nomeAluno      = $_POST['nomeAluno'];
    $dataNascAluno        =   $_POST['dataNascAluno'];
    $emailAluno = $_POST['emailAluno'];
    $statusAluno = $_POST['statusAluno'];
    

   

    if (!empty($_FILES['fotoAluno']['name'])) {


        // Foto
        $arquivo    = $_FILES['fotoAluno'];

        if ($arquivo['error']) {
            throw new Exception('Error' . $arquivo['error']);
        }
        if (move_uploaded_file($arquivo['tmp_name'], '../img/aluno/' . $arquivo['name'])) {
            $fotoAluno = 'aluno/' . $arquivo['name']; 
        } else {
            throw new Exception('Erro: Não foi possível realizar o upload da imagem.');
        }
    } else {
        $fotoAluno = $aluno->fotoAluno;
       
    }

    // Fim da Empty

    

    $aluno->nomeAluno = $nomeAluno;
    $aluno->dataNascAluno = $dataNascAluno;
    $aluno->emailAluno = $emailAluno;
    $aluno->statusAluno = $statusAluno;
    $aluno->fotoAluno = $fotoAluno;
    

    

    $aluno->Atualizar();
    
}


?>


<h1 class="h1Geral"> Atualização de Alunos</h1>

<form action="index.php?p=aluno&aluno=atualizar&id=<?php echo $aluno->idAluno ?>" method="POST" enctype="multipart/form-data">

    <div class="upload" class="input-group mb-3">
        <div class="img-aluno">
            <img src="img/sem-foto.jpg" class="img-upload" alt="..." id="imgfoto">
        </div>
        <input type="file" class="form-control" id="fotoAluno" name="fotoAluno"  style="display:none;">
    </div>

    <div class="mb-3">
        <label class="labelaluno" for="nomeAluno" class="form-label">Nome do Aluno</label>
        <input class="inputaluno" type="text" class="form-control" name="nomeAluno" id="nomeAluno"  placeholder="Informe Nome do Aluno" value="<?php echo $aluno->nomeAluno; ?>">
    </div>
    <div class="mb-3">
        <label class="labelaluno" for="dataNascAluno" class="form-label">Data de Nascimento</label>
        <input class="inputdata" type="date" class="form-control" name="dataNascAluno" id="dataNascAluno"  placeholder="Sua Data de Nascimento"value="<?php echo $aluno->dataNascAluno; ?>">
    </div>
    <div class="mb-3">
        <label class="labelaluno" for="emailAluno" class="form-label">Endereço de Email </label>
        <input class="inputaluno" type="emailAluno" class="form-control" name="emailAluno" id="emailAluno"  placeholder="name@example.com" value="<?php echo $aluno->emailAluno; ?>">
    </div>


    <div class="mb-3">
        <label class="labelaluno" for="inputPassword" class="form-label">Digite Sua Senha</label>
        <div class="col-sm-10">
            <input class="inputsenha" type="password" class="form-control" id="inputPassword"  placeholder="digite sua senha">
            <p>Sua senha deve ter de 8 a 20 caracteres, conter letras e números e não deve conter espaços, caracteres especiais ou emoji.</p>
        </div>
    </div>
   
    <div class="selecaoaluno" class="form-group col-sm-6 offset-md-2">
        <select class="form-select col-sm-2" aria-label="Default select example" name="statusAluno" >
            <option selected="">Seleciona o Status do Aluno</option>
            <option value="ATIVO">ATIVO</option>
            <option value="DESATIVADO">DESATIVADO</option>
            <option value="INATIVO">INATIVO</option>
        </select>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Atualizar Aluno</button>
    </div>

</form>

<script>
    // Evento de Clique
    document.getElementById('imgfoto').addEventListener('click', function() {
        document.getElementById('fotoAluno').click();
    });

    // Evento de Alteração Mudar
    document.getElementById('fotoAluno').addEventListener('change', function(e) {
        let imgfoto = document.getElementById('imgfoto');
        let arquivo = e.target.files[0]; // Get the selected file

        if (arquivo) {
            let carregar = new FileReader();

            carregar.onload = function(e) {
                imgfoto.src = e.target.result;
                console.log(imgFoto.src);
            }

            carregar.readAsDataURL(arquivo);
        }
    });
</script>