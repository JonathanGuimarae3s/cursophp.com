<?php

use models\Produto;
// agregação -> uma classe precisa da outra para executar
// uma açao ou seja uma classe utiliza a outra 
// como parte de si propia


class Produtos
{
    public $name;
    public $valor;
    function __construct($nome, $valor)
    {
        $this->name = $nome;
        $this->valor = $valor;
    }
}

class Carrinho
{
    public $produtos;
    public function view($produtosDB)
    {
        foreach ($produtosDB as $produto) {
            echo $produto->name . '<br>';
            echo $produto->valor . '<hr>';
        }
    }
    public function add(Produtos $produto)
    {
        $this->produtos[] = $produto;
        $this->view($this->produtos);
    }
}
$produto1 = new Produtos("mouse", "444");
$produto2 = new Produtos("mousepad", "244");

$carrinho = new Carrinho();
$carrinho->add($produto1);
$carrinho->add($produto2);
