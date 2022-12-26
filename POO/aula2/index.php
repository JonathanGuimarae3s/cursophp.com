<?php

class Entrar
{
    private $email;
    private $senha;
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($e)
    {
        $email = filter_var($e, FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    }
    public function getSenha()
    {
        return $this->senha;
    }
    public function setSenha($s)
    {
        $this->senha = $s;
    }

    public function logar()
    {
        if ($this->email == "teste@teste.com" and $this->senha == "123456") :
            echo "logado com sucesso";
        else :
            echo "dados invalidos";
        endif;
    }
}

$logar = new Entrar();
$logar->setEmail("teste@teste.com");
$logar->setSenha("123456");
$logar->logar();


echo ("<br>" . $logar->getEmail() . "<br>" . $logar->getsenha());
