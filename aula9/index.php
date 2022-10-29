<?php

$nomes = array("rodrigo", "felipe", "maria");

// is_array :verifica se é um array, caso seja ele retornará 1(true)
echo is_array($nomes);
echo "<br>";
var_dump(is_array($nomes));
// in_array : verifica se um determinado valor existe em determinada posição



if (in_array("rodrigo", $nomes)) :
    echo "existe no array";
else :
    echo "nao existe ";
endif;
echo "<br>";

// array_keys : retorna um novo array com a chaves do array passado como parametro
echo "array_keys";
echo "<br>";
$keys = array_keys($nomes);

print_r($keys);
echo "<br>";

//array_values>: retorna um novo array com os valores do array passado como paramentro
echo "array_values";
echo "<br>";

$values = array_values($nomes);
print_r($values);
echo "<br>";

// arry_merge : agrega o conteudo dos dois arrays
echo "array_merge";
echo "<br>";

$carros = array("camaro", "uno", "gol");
$motos = array("pop100", "50cc", "cb100");
$veiculos = array_merge($carros, $motos) ;
print_r ($veiculos);
echo"<br>";

echo "array_pop";
echo "<br>";
//array_pop: exclui a ultima posição do array
$exclui = array_pop($carros
);
print_r($carros);
echo "elemento excluido do array -> ";
print_r($exclui);
echo " <br>";

//array_shift: exclui a primeira posição do array

echo "array_shift";
echo "<br>";
$excluiPrima = array_pop(
    $carros
);
print_r($carros);
echo " <br>";
echo "elemento excluido do array -> ";
print_r($excluiPrima);
echo " <br>";

// array_unshift : adiciona um ou mais elementos no inicio do array
echo "array_unshift";
$frutas = array("laranja","pera");
print_r($frutas );
array_unshift($frutas,"manga","acerola");
print_r($frutas);
echo" <br>";

// array_push : adiciona um ou mais elemento no final do array
echo "array_push";
array_push($frutas, "jabuticaba", "abacaxi");
print_r($frutas);
echo " <br>";
// array_combine: serve para mesclar dois arrays. o valor de o array1 sera o indice/chave e o valor do array2 sera os valores desse novo array3
$keys = array("campeao","vice","terceiro");
$values = array("flamengo", "vasco", "botafogo");
$times= array_combine($keys, $values);
print_r($times);

// array_sum :serve para somar os valores do array


