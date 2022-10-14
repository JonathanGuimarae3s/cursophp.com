<?php

// arrays

$carros = array("BMW", "VELOSTER", "HILXU");
print_r($carros);
$carros[10]  = "camaro";
echo $carros[2];
echo $carros[10];
echo "<br>";




///////////////////////////////////////////

$motos = array();
$motos[] = "yamaha";
$motos[] = "Honda";
$motos[13] = "suzuki";


////////////////////////////////////

$clientes = ["rodrigo", "felipe", "bia"];
print_r($clientes);
echo "<hr>";


// count 
$totalClientes = count($clientes);
echo $totalClientes;
echo "<hr>";
// foreach
foreach($carros as $valor ){"
    echo $valor. "<br>";
}
// Arrays associativos
$pessoa= array("nome"=>"Rodrigo", "idade"=>"23", "altura"=>"1.32");
$pessoa["cidade"]= "itabuna"
foreach($pessoas as $indice=$valor){
    echo $indice. ":". $valor. $ 
}