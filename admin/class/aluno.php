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







}