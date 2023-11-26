<?php


$id = $_GET["id"];
//echo $id;
require_once("class/exercicios.php");
$exercicio = new ExerciciosClass($id);

echo $exercicio->nomeExercicio;



if (isset($_POST['nomeExercicio'])) {




    $nomeExercicio      = $_POST['nomeExercicio'];
    $altExercicio        =   $_POST['nomeExercicio'];
    $descricaoExercicio = $_POST['descricaoExercicio'];
    $grupoMuscularExercicio = $_POST['grupoMuscularExercicio'];
    $statusExercicio       = $_POST['statusExercicio'];
    $linkExercicio         = $_POST['linkExercicio'];
    

   

    if (!empty($_FILES['fotoExercicio']['name'])) {


        // Foto
        $arquivo    = $_FILES['fotoExercicio'];

        if ($arquivo['error']) {
            throw new Exception('Error' . $arquivo['error']);
        }
        if (move_uploaded_file($arquivo['tmp_name'], '../img/exercicio/' . $arquivo['name'])) {
            $fotoExercicio = 'exercicio/' . $arquivo['name']; //exercicio/corrida.png
        } else {
            throw new Exception('Erro: Não foi possível realizar o upload da imagem.');
        }
    } else {
        $fotoExercicio = $exercicio->fotoExercicio;
       
    }

    // Fim da Empty

    

    $exercicio->nomeExercicio = $nomeExercicio;
    $exercicio->altExercicio = $nomeExercicio;
    $exercicio->descricaoExercicio = $descricaoExercicio;
    $exercicio->grupoMuscularExercicio = $grupoMuscularExercicio;
    $exercicio->statusExercicio = $statusExercicio;
    $exercicio->fotoExercicio = $fotoExercicio;
    $exercicio->linkExercicio = $linkExercicio;

    

    $exercicio->Atualizar();
    
}




?>

<div class="col-md-12">

    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title"> Atualizar Exercícios</h3>
        </div>

        <form class="form-horizontal" action="index.php?p=exercicios&e=atualizar&id=<?php echo $exercicio->idExercicio ?> " method="POST" enctype="multipart/form-data">
            <div class="card-body">

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group row">
                            <div class="img-dashboard">
                                <img src="img/sem-foto.jpg" class="img-thumbnail" alt="..." id="imgfoto">
                            </div>
                            <input type="file" class="form-control" id="fotoExercicio" name="fotoExercicio" style="display: none;">
                        </div>





                    </div>

                    <div class="col-md-8 form-dash">

                        <div class="form-group row">
                            <label for="nomeExercicio" class="col-sm-2 col-form-label">Nome:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nomeExercicio" name="nomeExercicio" placeholder="Informe o nome do exercício:" value="<?php echo $exercicio->nomeExercicio; ?>">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="descricaoExercicio" class="col-sm-2 col-form-label">Descrição:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="descricaoExercicio" id="descricaoExercicio" cols="30" rows="10" placeholder="Informe a descrição do exercício:"><?php echo $exercicio->descricaoExercicio; ?></textarea>
                            </div>
                        </div>

                        <div class="row">

                            <div class="form-group col-sm-6 offset-md-2">
                                <select class="form-select col-sm-2" aria-label="Default select example" id="grupoMuscularExercicio" name="grupoMuscularExercicio" >
                                    <option value="<?php echo $exercicio->nomeExercicio; ?>"><?php echo $exercicio->grupoMuscularExercicio; ?></option>
                                    <option value="Peito">Peito</option>
                                    <option value="Pernas">Pernas</option>
                                    <option value="Bracos">Braços</option>
                                    <option value="Abdômen">Abdômen</option>
                                    <option value="Cardio">Cardio</option>
                                </select>

                            </div>

                            <div class="form-group col-sm-6 offset-md-2">
                                <select class="form-select col-sm-2" aria-label="Default select example" name="statusExercicio" required>
                                    <option selected="">Seleciona o Status do exercício</option>
                                    <option value="ATIVO">ATIVO</option>
                                    <option value="DESATIVADO">DESATIVADO</option>
                                    <option value="INATIVO">INATIVO</option>

                                </select>


                            </div>

                        </div>

                        <div class="form-group row">
                            <label for="linkExercicio" class="col-sm-2 col-form-label">Exercício:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="linkExercicio" name="linkExercicio" placeholder="Informe o Link Exercício:" value="<?php echo $exercicio->linkExercicio; ?>">
                            </div>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="submit" class="btn btn-primary">Atualizar Exercício</button>
                        </div>



                    </div>

                </div>

            </div>
        </form>
    </div>

</div>
<script>
    // Evento de Clique
    document.getElementById('imgfoto').addEventListener('click', function() {
        document.getElementById('fotoExercicio').click();
    });

    // Evento de Alteração Mudar
    document.getElementById('fotoExercicio').addEventListener('change', function(e) {
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