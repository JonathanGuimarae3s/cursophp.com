2<?php
    $idade = 25;
    $nome = "jonathan";
    /* xor retorna vdd quando somente uma condição for vdd,
se as duas forem vdd retornara false*/
    if (($idade == 24) xor ($nome == "carlos")) :
        echo "true";

    else :
        echo "false";
    endif;
