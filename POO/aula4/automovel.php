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

   protected function Andar()
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
    public function mostrarAcao()
    {
        $this->Andar();
    }
}


$carro = new Carro();
$carro->mostrarAcao();
