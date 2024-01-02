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
        // $sql =  "SELECT * FROM tbltreinos ORDER BY idTreino ASC" //;
        
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
        tblfuncionarios f ON t.idFuncionario = f.idFuncionario
    WHERE
        t.statusTreino = 'ATIVO'";

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

    public function Cadastrar()
    {
        // Define the query inside the method
        $query = "INSERT INTO tbltreinos (dataInicioTreino, dataFimTreino, statusTreino, idAluno, idFuncionario)  
        VALUES (
            '" . $this->dataInicioTreino . "', 
            '" . $this->dataFimTreino . "', 
            '" . $this->statusTreino . "', 
            '" . $this->idAluno . "', 
            '" . $this->idFuncionario . "'
           
        )";

        $conn = Conexao::LigarConexao();
        $conn->exec($query);

        echo "<script>document.location='index.php?p=treino'</script>";
    }
    public function __construct($id = false)
    {
        // Define the query inside the method
        if ($id) {
            $this->idTreino = $id;
            $this->Carregar();
        }
    }

    public function Carregar()
    {
        $query = "SELECT * FROM  tbltreinos WHERE idTreino = " . $this->idTreino;
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();

        foreach ($lista as $linha) {
            $this->dataInicioTreino = $linha['dataInicioTreino'];
            $this->dataFimTreino = $linha['dataFimTreino'];
            $this->statusTreino = $linha['statusTreino'];
            $this->idAluno = $linha['idAluno'];
            $this->idFuncionario = $linha['idFuncionario'];
           
        }
    }

    public function Atualizar()
    {
       
        $query = "UPDATE tbltreinos  
              SET dataInicioTreino =  '" . $this->dataInicioTreino . "',
                  dataFimTreino =  '" . $this->dataFimTreino . "', 
                  statusTreino = '" . $this->statusTreino . "', 
                  idAluno =  '" . $this->idAluno . "',
                  idFuncionario =  '" . $this->idFuncionario . "'   
                  WHERE tbltreinos.idTreino = " . $this->idTreino;

        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=treino'</script>";
    }
    public function desativar()
    {
        $query = "UPDATE tbltreinos SET statusTreino ='DESATIVADO' WHERE idTreino = " . $this->idTreino;
        
        $conn = Conexao::LigarConexao();
        $conn->exec($query);
    }

}



