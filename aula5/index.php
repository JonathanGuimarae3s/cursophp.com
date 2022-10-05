<?php

// is_string/int/float e etc é uma função que valida o tipo da variavel


//  tipos de dados escalares



$nome = "Ola mundo 123 !@$#@";

var_dump($nome);
if (is_string($nome)) {
    echo "é uma string";
} else {
    echo "nao é uma string";
};
echo "<hr>";
// int


$idade = 10;
var_dump($idade);

if (is_int($idade)) {

    echo "é um inteiro";
} else {
    echo "nao é um inteiro";
};
echo "<hr>";

// float


$altura = 1.33;
var_dump($altura);
if (is_float($altura)) {
    echo "é um real";
} else {

    echo "nao é real";
};
echo "<hr>";
// boolean


$adm = true;
var_dump($adm);
if (is_bool($adm)) {
    echo "é um booleano";
} else {

    echo "nao é booleano";
};
echo "<hr>";
// compostos


// array
$carros = array("Jonathan", 123, 12.2, true);

var_dump($carros);
if (is_array($carros)) {
    echo "é um array";
} else {

    echo "nao é array";
};
echo "<hr>";

// object

class Cliente
{
    public $nome;
    public function atribuirNome($nome)
    {
        $this->$nome = $nome;
    }
};

