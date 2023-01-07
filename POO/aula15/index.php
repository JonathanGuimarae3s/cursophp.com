<?php
// clone
// construct
// invoke
// tostring
// get
// set


class Pessoa
{
    private $dados = array();



    public function __get($nome)
    {
        return $this->dados[$nome];
    }

    public function __set($nome, $valor)
    {
        $this->dados[$nome] = $valor;
    }
    public function __toString()
    {
        return "tentei imprimir o objeto";
        // retorna uma string caso objeto for invokado
            }
    public function __invoke()
{
    // essa funcao serve para invocar uma outra funçao caso o 
    // objto seja invokado
        return "objeto com funcao";
    }
}
$person = new Pessoa;
$person->nome = "JOJO";
$person->idade = 12;

echo $person;
