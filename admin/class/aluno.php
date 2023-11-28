<?php


require_once ('conexao.php');

class AlunoClass{

    public $idAluno;
    public $nomeAluno;
    public $dataNascAluno;
    public $emailAluno;
   //  public $dataCadAluno; //
    public $statusAluno;
    public $fotoAluno;

   // '".$this->dataCadAluno."', 
      // dataCadAluno,

    public function listar(){
        $sql = "SELECT * FROM tblalunos WHERE statusAluno = 'ATIVO' ORDER BY idAluno ASC";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;

    }
// Cadastrar
public function Cadastrar() {
    // Define the query inside the method
    $query = "INSERT INTO tblalunos (nomeAluno, dataNascAluno, emailAluno,  statusAluno, fotoAluno)  
        VALUES (
            '".$this->nomeAluno."', 
            '".$this->dataNascAluno."', 
            '".$this->emailAluno."', 
            
            '".$this->statusAluno."', 
            '".$this->fotoAluno."' 
            
        )";
       
    

    $conn = Conexao::LigarConexao();
    $conn->exec($query);

    echo "<script>document.location='index.php?p=aluno'</script>";
}
public function __construct($id = false)
{
    // Define the query inside the method
    if ($id) {
        $this->idAluno = $id;
        $this->Carregar();
    }
}
public function Carregar()
{
    $query = "SELECT * FROM  tblalunos WHERE idAluno = " . $this->idAluno;
    $conn = Conexao::LigarConexao();
    $resultado = $conn->query($query);
    $lista = $resultado->fetchAll();

    foreach ($lista as $linha) {
        $this->nomeAluno = $linha['nomeAluno'];
        $this->dataNascAluno = $linha['dataNascAluno'];
        $this->emailAluno = $linha['emailAluno'];
        $this->statusAluno = $linha['statusAluno'];
        $this->fotoAluno = $linha['fotoAluno'];
       
    }
}








// Atualizar 
 public function Atualizar()
 {
     // SQL UPDATE query to update the record in the 'tblexercicios' table
     $query = "UPDATE tblalunos  
           SET nomeAluno =  '" . $this->nomeAluno . "',
               dataNascAluno =    '" . $this->dataNascAluno . "',
               emailAluno =  '" . $this->emailAluno . "', 
               statusAluno =  '" . $this->statusAluno . "',
               fotoAluno =  '" . $this->fotoAluno . "' 
               
           WHERE tblalunos.idAluno = '" . $this->idAluno . "'";

     $conn = Conexao::LigarConexao();
     $conn->exec($query);
     echo "<script>document.location='index.php?p=aluno'</script>";
 }






}