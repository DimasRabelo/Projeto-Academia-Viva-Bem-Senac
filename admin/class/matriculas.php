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




    public function listar()
{
    // $sql =  "SELECT * FROM tblmatriculas ORDER BY idMatricula ASC" //;
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
        tblplanos p ON m.idPlano = p.idPlano
    WHERE
        m.statusMatricula = 'ATIVO'
    ORDER BY
        m.idMatricula ASC";  // Alteração aqui

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
        $query = "INSERT INTO tblmatriculas (dataInicioMatricula, dataFimMatricula, statusMatricula, idAluno, idPlano, valorPago)  
        VALUES (
            '" . $this->dataInicioMatricula . "', 
            '" . $this->dataFimMatricula . "', 
            '" . $this->statusMatricula . "', 
            '" . $this->idAluno . "', 
            '" . $this->idPlano . "', 
            '" . $this->valorPago . "'
        )";

        $conn = Conexao::LigarConexao();
        $conn->exec($query);

        echo "<script>document.location='index.php?p=matriculas'</script>";
    }
    public function __construct($id = false)
    {
        // Define the query inside the method
        if ($id) {
            $this->idMatricula = $id;
            $this->Carregar();
        }
    }

    public function Carregar()
    {
        $query = "SELECT * FROM  tblmatriculas WHERE idMatricula = " . $this->idMatricula;
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();

        foreach ($lista as $linha) {
            $this->dataInicioMatricula = $linha['dataInicioMatricula'];
            $this->dataFimMatricula = $linha['dataFimMatricula'];
            $this->statusMatricula = $linha['statusMatricula'];
            $this->idAluno = $linha['idAluno'];
            $this->idPlano = $linha['idPlano'];
            $this->valorPago = $linha['valorPago'];
        }
    }

    public function Atualizar()
    {

        $query = "UPDATE tblmatriculas  
              SET dataInicioMatricula =  '" . $this->dataInicioMatricula . "',
                  dataFimMatricula =  '" . $this->dataFimMatricula . "', 
                  statusMatricula = '" . $this->statusMatricula . "', 
                  idAluno =  '" . $this->idAluno . "',
                  idPlano =  '" . $this->idPlano . "',  
                  valorPago = '" . $this->valorPago . "'   
                  WHERE tblmatriculas.idMatricula = " . $this->idMatricula . "'";

        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=matriculas'</script>";
    }




    public function desativar()
    {
        $query = "UPDATE tblmatriculas SET statusMatricula = 'DESATIVADO' WHERE idMatricula = " . $this->idMatricula;

        $conn = Conexao::LigarConexao();
        $conn->exec($query);

        echo "ID Matrícula: " . $this->idMatricula . "<br>";
        echo "Status Matrícula antes da desativação: " . $this->statusMatricula . "<br>";
    }
}
