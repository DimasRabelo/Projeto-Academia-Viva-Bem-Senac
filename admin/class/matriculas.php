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
           
            $conn = Conexao::LigarConexao();
            $resultado = $conn->query($sql);
            $lista = $resultado->fetchAll();
            return $lista;
    
    
    
        }
    

    }

