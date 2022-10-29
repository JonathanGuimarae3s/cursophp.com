<?php


$nome ="Rodrigo";
$altoNome = strtoupper($nome);
echo $altoNome;
echo "<hr>";
// ============

$baixoNome = strtolower($altoNome);
echo $baixoNome;
echo "<hr>"; 
// ============

$mensagem = "ola, mundo";
echo substr($mensagem,3,6);
// ============
echo "<hr>";
$objeto = "mouse";
$novoObjeto =str_pad($objeto,10,"()");
echo $novoObjeto ;
// ============

