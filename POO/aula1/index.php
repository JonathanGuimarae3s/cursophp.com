<?php

class Pessoa
{
    public $nome;
    public $idade;
    public function falar()
    {
        echo "falei" . $this->idade;
    }
}


$rodrigo = new Pessoa();

$rodrigo->idade = 20;
$rodrigo->nome = "jonataan</br>";

var_dump($rodrigo);
echo $rodrigo->nome;
$rodrigo->falar();