<?php
// $Globals ela armazena todas as variaves globais em um array chamado globalss


$x = 12;
$y = 15;

function soma()
{
    echo $GLOBALS['x'] + $GLOBALS['y'];
}

soma();

// =====================

// $_SERVER : ela contem informações sobre caminho,cabeçalho e locais de scripts. é um array que contem varios indices 


echo "<hr>";

echo $_SERVER['PHP_SELF'] . "<br>";
echo $_SERVER['SERVER_NAME'] . "<br>";
echo $_SERVER['SCRIPT_FILENAME'] . "<br>";
echo $_SERVER['DOCUMENT_ROOT'] . "<br>";
echo $_SERVER['SERVER_PORT'] . "<br>";
echo $_SERVER['REMOTE_ADDR'] . "<br>";
echo $_SERVER['SERVER_SIGNATURE'] . "<br>";
echo $_SERVER['REQUEST_TIME'] . "<br>";
