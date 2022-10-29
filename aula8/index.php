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
foreach ($clientes as $valor) {
    echo $valor. "<br";
}
echo "<br>";

// Arrays associativos
$pessoas = array("nome" => "Rodrigo", "idade" => "23", "altura" => "1.32");
$pessoas["cidade"] = "itabuna";
foreach ($pessoas as $indice => $valor) {
    echo $indice. ":" .$valor. "<br>";
};
echo    "<hr>";
// array multidimensional
$times = array(
    "cariocas" => array("campeao"=>"vasco","vice"=> "flamengo"), "paulistas" => array("santos", " sao paulo"), "baianos" => array("bahia", "vitoria")
);
foreach($times["cariocas"] as $indice=>$valor)
{
    echo $indice.":" .$valor. "<br>";
};
foreach ($times["baianos"] as $indice => $valor) {
    echo $indice . ":" . $valor . "<br>";
};
foreach ($times["paulistas"] as $indice => $valor) {
    echo $indice . ":" . $valor . "<br>";
};