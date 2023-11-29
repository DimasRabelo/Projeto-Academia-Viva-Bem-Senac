<?php


require_once('conexao.php');

class FuncionarioClass {

    
    public $idFuncionarios ;
    public $nomeFuncionario ;

    public $altFuncionario;
    public $dataNascFuncionario;

    public $cargoFuncionario;
    public $especialidadeFuncionario;
    public $emailFuncionario;

    public $senhaFuncionario;
    public $nivelFuncionario;
    public $telefoneFuncionario;
    public $dataAdmissaoFuncionario;
    public $statusFuncionario;
    public $fotoFuncionario;

    

    public function listarFuncionario(){
        $sql =  "SELECT * FROM tblfuncionarios ORDER BY idFuncionarios ASC";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;
}
public function Cadastrar()
    {
        // Define the query inside the method
        $query = "INSERT INTO tblfuncionarios (nomeFuncionario, altFuncionario, dataNascFuncionario, cargoFuncionario, especialidadeFuncionario, emailFuncionario, senhaFuncionario, nivelFuncionario, telefoneFuncionario, dataAdmissaoFuncionario, statusFuncionario, fotoFuncionario)  
        VALUES (
            '" . $this->nomeFuncionario . "', 
            '" . $this->altFuncionario . "', 
            '" . $this->dataNascFuncionario . "', 
            '" . $this->cargoFuncionario . "', 
            '" . $this->especialidadeFuncionario . "', 
            '" . $this->emailFuncionario . "', 
            '" . $this->senhaFuncionario . "',
            '" . $this->nivelFuncionario . "', 
            '" . $this->telefoneFuncionario . "', 
            '" . $this->dataAdmissaoFuncionario . "', 
            '" . $this->statusFuncionario . "', 
            '" . $this->fotoFuncionario . "' 
           

        )";

        $conn = Conexao::LigarConexao();
        $conn->exec($query);

        echo "<script>document.location='index.php?p=funcionarios'</script>";
    }


    public function __construct($id = false)
    {
        // Define the query inside the method
        if ($id) {
            $this->idFuncionarios = $id;
            $this->Carregar();
        }
    }

    // Carregar 
    public function Carregar()
    {
        $query = "SELECT * FROM  tblfuncionarios WHERE idFuncionarios = " . $this->idFuncionarios;
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();

        foreach ($lista as $linha) {
            $this->nomeFuncionario = $linha['nomeFuncionario'];
            $this->altFuncionario = $linha['altFuncionario'];
            $this->dataNascFuncionario = $linha['dataNascFuncionario'];
            $this->cargoFuncionario = $linha['cargoFuncionario'];
            $this->especialidadeFuncionario = $linha['especialidadeFuncionario'];
            $this->emailFuncionario = $linha['emailFuncionario'];
            $this->senhaFuncionario = $linha['senhaFuncionario'];
            $this->nivelFuncionario = $linha['nivelFuncionario'];
            $this->telefoneFuncionario = $linha['telefoneFuncionario'];
            $this->dataAdmissaoFuncionario = $linha['dataAdmissaoFuncionario'];
            $this->statusFuncionario = $linha['statusFuncionario'];
            $this->fotoFuncionario = $linha['fotoFuncionario'];
           
        }
    }


    // Atualizar 
    public function Atualizar()
    {
        // SQL UPDATE query to update the record in the 'tblexercicios' table
        $query = "UPDATE tblfuncionarios  
              SET nomeFuncionario =  '" . $this->nomeFuncionario . "',
                 altFuncionario =  '" . $this->altFuncionario . "', 
                  dataNascFuncionario = '" . $this->dataNascFuncionario . "', 
                  cargoFuncionario =  '" . $this->cargoFuncionario . "',
                  especialidadeFuncionario =  '" . $this->especialidadeFuncionario . "',  
                  emailFuncionario = '" . $this->emailFuncionario . "',
                  senhaFuncionario =   '".$this->senhaFuncionario."',
                  nivelFuncionario = '".$this->nivelFuncionario."',
                  telefoneFuncionario = '".$this->telefoneFuncionario."',
                  dataAdmissaoFuncionario = '".$this->dataAdmissaoFuncionario."',
                  statusFuncionario = '".$this->statusFuncionario."',
                  fotoFuncionario = '".$this->fotoFuncionario."'
              WHERE tblfuncionarios.idFuncionario = '" . $this->idFuncionarios . "'";

        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=funcionarios'</script>";
    }
    public function Desativar()
    {
        $query = "UPDATE tblfuncionarios SET statusFuncionario ='DESATIVADO' WHERE idFuncionarios = " . $this->idFuncionarios;
    }
}








