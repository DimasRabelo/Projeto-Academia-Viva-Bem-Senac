<?php

require_once('conexao.php');




class TreinoClass{


     public $idTreino;

     public $dataInicioTreino;

     public $dataFimTreino;

     public $statusTreino;

     public $idAluno;

     public $Funcionario;

     public function listar(){
        $sql =  "SELECT * FROM tbltreinos ORDER BY idTreino ASC";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;



    }
















}



