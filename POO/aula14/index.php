<?php
// composição 
// uma classe cria a instancia de outra classe dentro de si propia,
// sendo assim, quando ela for destruida, a outra tambem sera


class Pessoa
{
    public function atribuirNome($nome)
    {
        return "o nome da pessoa é $nome";
    }
}

class Exibe
{
    public $pessoa;
    public $nome;
    public function __construct($nome)
    {
        $this->pessoa = new Pessoa();
        $this->nome = $nome;
    }
    public function ViewNome()
    {
        echo $this->pessoa->atribuirNome($this->nome);
    }
}
$exibe = new Exibe("jhon");

$exibe->ViewNome();
