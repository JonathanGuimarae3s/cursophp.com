<?php
namespace App\model;

class ProductDao
{

    public function create(Product $product)
    {
        $sql = 'INSERT INTO `produtos`( `nome`, `desc`) VALUES (?,?)';
        $stmt = Connect::getConnect()->prepare($sql);
        $stmt->bindValue(1, $product->getNome());
        $stmt->bindValue(2, $product->getDescricao());



    }
    public function read()
    {
    }
    public function update(Product $product)
    {
    }
    public function delete($id)
    {
    }
}