<?php
require_once("pessoa.php");

class Teste{
    private $pessoa;

    public function __construct()
    {
        $pessoa = new Pessoa();

        $pessoa->setNome($_POST['nome']);
        echo $pessoa->getNome();
    }
}new Teste();

?>