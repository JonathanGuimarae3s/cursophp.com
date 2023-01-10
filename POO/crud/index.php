<?php
use App\model\ProductDao;

require_once 'vendor/autoload.php';
$produto = new \App\model\Product();



$produto->setNome('notebook');
$produto->setDescricao('notebook dell');

$produtoDao = new ProductDao();
$produtoDao->create($produto);