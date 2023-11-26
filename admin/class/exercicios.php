<?php
require_once('conexao.php');

class ExerciciosClass
{
    public $idExercicio;
    public $nomeExercicio;
    public $altExercicio;
    public $descricaoExercicio;
    public $grupoMuscularExercicio;
    public $statusExercicio;
    public $fotoExercicio;
    public $linkExercicio;

    // Listar
    public function listar()
    {
        $sql = "SELECT * FROM tblexercicios WHERE statusExercicio = 'Ativo' ORDER by idExercicio  ASC ";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    // Cadastrar
    public function Cadastrar()
    {
        // Define the query inside the method
        $query = "INSERT INTO tblexercicios (nomeExercicio, altExercicio, descricaoExercicio, grupoMuscularExercicio, statusExercicio, fotoExercicio, linkExercicio)  
        VALUES (
            '" . $this->nomeExercicio . "', 
            '" . $this->altExercicio . "', 
            '" . $this->descricaoExercicio . "', 
            '" . $this->grupoMuscularExercicio . "', 
            '" . $this->statusExercicio . "', 
            '" . $this->fotoExercicio . "', 
            '" . $this->linkExercicio . "'
        )";

        $conn = Conexao::LigarConexao();
        $conn->exec($query);

        echo "<script>document.location='index.php?p=exercicios'</script>";
    }

    public function __construct($id = false)
    {
        // Define the query inside the method
        if ($id) {
            $this->idExercicio = $id;
            $this->Carregar();
        }
    }

    // Carregar 
    public function Carregar()
    {
        $query = "SELECT * FROM  tblexercicios WHERE idExercicio = " . $this->idExercicio;
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();

        foreach ($lista as $linha) {
            $this->nomeExercicio = $linha['nomeExercicio'];
            $this->altExercicio = $linha['altExercicio'];
            $this->grupoMuscularExercicio = $linha['grupoMuscularExercicio'];
            $this->descricaoExercicio = $linha['descricaoExercicio'];
            $this->statusExercicio = $linha['statusExercicio'];
            $this->fotoExercicio = $linha['fotoExercicio'];
            $this->linkExercicio = $linha['linkExercicio'];
        }
    }

    // Atualizar 
    public function Atualizar()
    {
        // SQL UPDATE query to update the record in the 'tblexercicios' table
        $query = "UPDATE tblexercicios  
              SET nomeExercicio =  '" . $this->nomeExercicio . "',
                  altExercicio =    '" . $this->altExercicio . "',
                  grupoMuscularExercicio =  '" . $this->grupoMuscularExercicio . "', 
                  descricaoExercicio = '" . $this->descricaoExercicio . "', 
                  statusExercicio =  '" . $this->statusExercicio . "',
                  fotoExercicio =  '" . $this->fotoExercicio . "',  
                  linkExercicio = '" . $this->linkExercicio . "'
              WHERE tblexercicios.idExercicio = '" . $this->idExercicio . "'";

        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=exercicios'</script>";
    }
}
?>
