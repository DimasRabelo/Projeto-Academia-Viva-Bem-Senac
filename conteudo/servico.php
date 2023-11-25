<section class="contServico wow animate__animated animate__fadeInUp">
    <div class="site">
        <h2>Treinos</h2>
        <div>
            <?php
            $listaRand = array_rand($lista, min(3, count($lista)));
            //var_dump($listaRand);
            foreach($listaRand as $key) : { $linha = $lista[$key]; }
            ?>
            <div>
                <h3><?php echo $linha['nomeExercicio']  ?></h3>
                <img src="<?php echo 'img/' . $linha['fotoExercicio'] ?> " alt="<?php echo $linha['altExercicio']  ?>">
                <p><?php echo $linha['descricaoExercicio']  ?></p>
                <a href="<?php echo $linha['linkExercicio']  ?>">conheça</a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>