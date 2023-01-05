<?php
class Pessoaa
{
    public $idade;
    public function __clone()
    {
        echo "clone success";
    }
}
$pessoa = new Pessoaa();
$pessoa->idade = 25;

$pessoa2 = clone $pessoa ;
$pessoa2->idade = 35;

echo $pessoa->$idade;
