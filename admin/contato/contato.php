<?php

require_once('class/contato.php');
$contato = new ContatoClass();
$lista = $contato->ListarContato();

// TESTE 
// var_dump($lista)

?>
 


<div class=" table-responsive">
    <table class="table table-bordered border-primary">
        <caption> Lista de e-mail</caption>
        <thead>
            <tr>
                <th class="thcontato" class="p-3 mb-2 bg-warning text-dark">ID Contato</th>
                <th class="thcontato" class="p-3 mb-2 bg-warning text-dark">Nome Contato</th>
                <th class="thcontato" class="p-3 mb-2 bg-warning text-dark">E-mail Contato</th>
                <th class="thcontato"  class="p-3 mb-2 bg-warning text-dark">Telefone Contato</th>
                <th class="thcontato" class="p-3 mb-2 bg-warning text-dark">Mensagem</th>
                <th class="thcontato" class="p-3 mb-2 bg-warning text-dark">Data da Mensagem</th>
                <th class="thcontato" class="p-3 mb-2 bg-warning text-dark">Status da Mensagem</th>
                <th class="thcontato" class="p-3 mb-2 bg-warning text-dark">Hora da Mensagem </th>


            </tr>
        </thead>
        <tbody>
           <?php

                foreach ($lista as $linha): ?>
             <tr>
                <td class="tdcontato" class="bg-info"><?php echo $linha['idContato']; ?></td>
                <td class="tdcontato" class="table-info" ><?php echo $linha['nomeContato']; ?></td>
                <td class="tdcontato"  class="table-info"><?php echo $linha['emailContato']; ?></td>
                <td class="tdcontato" class="table-info"><?php echo $linha['telefoneContato']; ?></td>
                <td class="tdcontato" class="table-info"><?php echo $linha['mensagemContato'] ?></td>
                <td class="tdcontato" class="table-info"><?php echo date('d/m/Y', strtotime($linha['dataContato'])) ?></td>
                <td class="tdcontato" class="table-info"><?php echo $linha['statusContato'] ?></td>
                <td class="tdcontato" class="table-info"><?php echo $linha['horaContato'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>


    </table>











</div>