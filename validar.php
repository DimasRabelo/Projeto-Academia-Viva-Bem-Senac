<?php 

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if(empty($dados['email'])){
    $retorna = ['erro' => true, 'msg' =>"<div class='alert alert-danger' role='alert'>Erro: Necessário Preencher o campo de usuario!</div>"];
}elseif(empty($dados['senha'])){
    $retorna = ['erro' => true, 'msg' =>"<div class='alert alert-danger' role='alert'>Erro: Necessário Preencher o campo de senha!</div>"];
}else{
    $retorna = ['erro' => false, 'msg' =>"<div class='alert alert-success' role='alert'>Validar</div>"];
}

echo json_encode($retorna);






