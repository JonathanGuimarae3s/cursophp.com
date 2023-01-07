<?php
// acontece quando um objeto utiliza outro ,porem sem que eles depedam 
// um do outro


class Pedido
{
    public $numero;
    public $cliente;
}
class Cliente
{
    public $nome;
    public $endereco;
}
$cliente = new Cliente();
$cliente->nome = 'Rodrigo ';
$cliente->endereco = 'rua pao de avestruz 299';

$pedido = new Pedido();

$pedido->numero = '1';
$pedido->cliente = $cliente;


$dados = array(
    'numero' => $pedido->numero,
    'nome' => $pedido->cliente->nome,
    'endereço' => $pedido->cliente->endereco

);

var_dump($dados);
