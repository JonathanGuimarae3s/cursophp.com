<?php

function exibirNome($nome)
{

    echo "meu nome é $nome";
}
exibirNome("Joseph");
echo "<hr>";


function calcularMedia($nome, $n1, $n2, $n3, $n4)
{
    $media = ($n1 + $n2 + $n3 + $n4) / 4;
    if ($media >= 7) {
        echo "$nome está aprovado com a média $media<br>";
    } else {
        echo "$nome está reprovado com a média $media<br>   ";
    }
};
calcularMedia("bob",4,5,4,3);
calcularMedia("kell", 7, 7, 8, 9);
