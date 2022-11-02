!<?php
    $db = 12211112.0233;

    $preco = number_format($db, 2, ",",".");

    echo " o valor do produto é $preco";
    echo "<hr>";
    echo round($db);
    echo "<hr>";

    // ==========
    // arrendonda para cima
    echo ceil($db);
    // ==========
    // arrendonda para baixo
    echo "<hr>";

    echo floor($db);
    // ==========
    // gera numero aleatoria entre os dois paramentros definidos 
    echo "<hr>";

    echo rand(1, 20);
