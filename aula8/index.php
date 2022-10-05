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

foreach($carros as $valor ){
    echo $valor. "<br>";
}