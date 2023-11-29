<?php

require_once('conexao.php');




class TreinoClass{


     public $idTreino;

     public $dataInicioTreino;

     public $dataFimTreino;

     public $statusTreino;

     public $idAluno;

     public $idFuncionario;

     public function listar(){
        $sql =  "SELECT * FROM tbltreinos ORDER BY idTreino ASC";
        
$sql = "SELECT
t.idTreino,
t.dataInicioTreino,
t.dataFimTreino,
t.statusTreino,
a.nomeAluno,
f.nomeFuncionario

FROM
tbltreinos t
INNER JOIN
tblalunos a ON t.idAluno = a.idAluno
INNER JOIN
tblfuncionarios f ON t.idFuncionario = f.idFuncionario";
         try {
            $conn = Conexao::LigarConexao();
            $resultado = $conn->query($sql);
            $lista = $resultado->fetchAll();
            return $lista;
        } catch (PDOException $e) {
            echo "Erro na consulta: " . $e->getMessage();
            return false;
        }
    }















}



