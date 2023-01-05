<?php

require 'class/index.php';

require 'models/index.php';

use models\Produto as productModel;
use classe\Produto as productClasse;

$produto = new productModel();
$produto2 = new productClasse();
$produto2->mostrarDetalhes();
echo "<br>";

$produto->mostrarDetalhes();
