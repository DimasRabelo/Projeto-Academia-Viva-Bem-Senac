<?php


require_once('conexao.php');

class MatriculasClass
{

    public $idMatricula;
    public $dataInicioMatricula;
    public $dataFimMatricula;
    public $statusMatricula;

    public $idAluno;
    public $idPlano;

    public $valorPago;


   
       
    public function listar(){
        $sql =  "SELECT * FROM tblmatriculas ORDER BY idMatricula ASC";
       
        $sql = "SELECT
                    m.idMatricula,
                    m.dataInicioMatricula,
                    m.dataFimMatricula,
                    m.statusMatricula,
                    m.valorPago,
                    a.nomeAluno,
                    p.nomePlano
                    
                FROM
                    tblmatriculas m
                INNER JOIN
                    tblalunos a ON m.idAluno = a.idAluno
                INNER JOIN
                    tblplanos p ON m.idPlano = p.idPlano";
                
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
    
    

