<?php


require_once('conexao.php');

class FuncionarioClass
{


    public $idFuncionario;
    public $nomeFuncionario;

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



    public function listarFuncionario()
    {
        // $sql =  "SELECT * FROM tblfuncionarios ORDER BY idFuncionario ASC" //;
        $sql = "SELECT * FROM tblfuncionarios WHERE statusFuncionario = 'ATIVO' ORDER by idFuncionario  ASC ";
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
            $this->idFuncionario = $id;
            $this->Carregar();
        }
    }

    // Carregar 
    public function Carregar()
    {
        $query = "SELECT * FROM  tblfuncionarios WHERE idFuncionario = " . $this->idFuncionario;
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
       
        $query = "UPDATE tblfuncionarios  
              SET nomeFuncionario =  '" . $this->nomeFuncionario . "',
                  altFuncionario =  '" . $this->altFuncionario . "', 
                  dataNascFuncionario = '" . $this->dataNascFuncionario . "', 
                  cargoFuncionario =  '" . $this->cargoFuncionario . "',
                  especialidadeFuncionario =  '" . $this->especialidadeFuncionario . "',  
                  emailFuncionario = '" . $this->emailFuncionario . "',
                  senhaFuncionario =   '" . $this->senhaFuncionario . "',
                  nivelFuncionario = '" . $this->nivelFuncionario . "',
                  telefoneFuncionario = '" . $this->telefoneFuncionario . "',
                  dataAdmissaoFuncionario = '" . $this->dataAdmissaoFuncionario . "',
                  statusFuncionario = '" . $this->statusFuncionario . "',
                  fotoFuncionario = '" . $this->fotoFuncionario . "'
              WHERE tblfuncionarios.idFuncionario = '" . $this->idFuncionario . "'";

        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=funcionarios'</script>";
    }
    public function desativar()
   
    {
        $query = "UPDATE tblfuncionarios SET statusFuncionario ='DESATIVADO' WHERE idFuncionario = " . $this->idFuncionario;
        
        $conn = Conexao::LigarConexao();
        $conn->exec($query);
    }

    public function verificarLogin()
    {
   
      
   
        $sql = "SELECT * FROM tblfuncionarios 
           WHERE emailFuncionario = '". $this->emailFuncionario ."' AND    
           senhaFuncionario = '". $this->senhaFuncionario ."'";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($sql);
        $funcionario = $resultado->fetch();
    
        if ($funcionario) {
            return $funcionario['idFuncionario'];
        } else {
            return false;
        }
    }
    
   
   }
   
   if (isset($_POST['email'])) {
   
       $funcionario = new FuncionarioClass();
   
       $emailLogin = $_POST['email'];
       $senhaLogin = $_POST['password'];
   
       $funcionario->emailFuncionario = $emailLogin;
       $funcionario->senhaFuncionario = $senhaLogin;
   
       if($idFuncionario = $funcionario->verificarLogin()){
           //Login bem-sucedido
           //print_r($idAluno);
   
           session_start();
           $_SESSION['idFuncionario'] = $idFuncionario;
           echo json_encode(['success' => true, 'message' => 'Login foi realizado com sucesso', 'idFuncionario' => $idFuncionario]);
   
       }else{
           //Login inaválido
           //print_r('Erro de login');
   
           echo json_encode(['success' => false, 'message' => 'Email ou Senha inválido']);
       }
   
       //print_r($_POST['email']);
   }
   



