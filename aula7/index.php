<?php
// constantes

// para declarar uma vvar constante  é necessario usa a funcao "define"  define("NOMEDAVARIAVEL", "valorDaVariavel")
// AS VARIAVEIS CONSTANTES SAO GLOBAIS!!

define("NOME", "Jonathan");
define("IDADE", 20);


define("ALTURA", 1.81);
define("CASADO", true);
define("TIMES",['VASCO','FLAMENGO', 'SANTOS']);
echo 'meu nome é ' .NOME. ', minha idade é ' .IDADE. ' e minha altura é ' .ALTURA. '.';
echo "<hr>";


function exibirNome(){
    echo NOME;
}
exibirNome();