
<?php

require_once('conexao.php');

class PlanoClass 
{
    public $idPlano;
    public $nomePlano;
    public $descricaoPlano;
    public $valorPlano;

    public $statusPlano;

    public $fotoPlano;


    public function listarPlanos()
    {
        $sql =  "SELECT * FROM tblplanos ORDER BY idPlano ASC";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;
    }








}


