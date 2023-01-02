<?php
class Pessoa
{
    const nome = "josse";
    public function exibirNome()
    {
        echo self::nome;
    }
}



class Rodrigo extends Pessoa
{
    const nome = "marcos";
    public function exibirNome()
    {
        /**
         * self = mostra o valor da variavel  escopo da classe
         * parent = mostra o valor da variavel  escopo da classe que esta servindo de 'modelo'
         */
        echo self::nome;
        echo "<br>" . parent::nome;
    }
}

$pessoa = new Rodrigo();
$pessoa->exibirNome();
