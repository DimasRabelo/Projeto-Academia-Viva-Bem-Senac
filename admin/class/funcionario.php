<?php


require_once('conexao.php');

class FuncionarioClass {

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





}