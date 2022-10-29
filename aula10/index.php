<?php

$numero = 10;
if ($numero == 10) :

    echo "é 10";
elseif ($numero <= 9) :
    echo "é menor ou igaual a 9";

else : echo "é diferente 10";
endif;


$cor = "vermelho";
switch ($cor):

    case  "vermelho":
        echo "vermelho";
        break;
    case  "azul":
        echo "azul";
        break;
    case  "roxo":
        echo "roxo";
        break;
    default:
        echo "[erro]";
        break;
endswitch;
