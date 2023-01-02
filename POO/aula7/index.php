<?php
// polimorfismo é substituir ou reescrever um metodo da class pai
class Animal
{
    public function Andar()
    {
        echo "o Animal andou";
    }
    public function Correr()
    {

        echo "o animal correu";
    }
}
class Cavalo extends Animal
{
    public function Andar()
    {
        $this->Correr();
    }
}
$animal = new Cavalo();
$animal->Andar();
