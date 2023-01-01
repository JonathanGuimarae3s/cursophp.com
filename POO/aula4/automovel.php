<?php

class Automovel
{
    protected $modelo;
    public $cor;
    public $ano;
    public function getModelo()
    {
        return $this->modelo;
    }
    public function setModelo($m)
    {
        $this->modelo = $m;
    }

    public function Andar()
    {
        echo "andou <br>";
    }
    public function Parar()
    {
        echo "parou <br>";
    }
}
class Carro extends Automovel
{
    public function Parabrisas()
    {
        echo "parabrisas ligado";
    }
}
class Moto extends Automovel
{
    public function Grau()
    {
        echo "empinando";
    }
}


$carro = new Carro();
$carro->setModelo("GOL");
$carro->cor = "preto";
$carro->ano = "2022";
$carro->Andar();
echo "<br>";
$carro->Parabrisas();
echo "<br>";
echo $carro->getModelo();
echo "<br>";



var_dump($carro);
echo "<br>";
$moto = new Moto();
$moto->setModelo("PAO");
echo "<br>";
echo $moto->getModelo();
echo "<br>";
$moto->cor = "preto";
$moto->ano = "2022";
echo "<br>";
$moto->Grau();
echo "<br>";
var_dump($moto);
echo "<br>";
