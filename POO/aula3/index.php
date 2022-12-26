<?php

class Login
{
    private $email;
    private $senha;
    private $nome;
    public function __construct($email, $senha, $nome)
    {
        $this->nome = $nome;
        $this->setEmail($email);
        $this->setSenha($senha);
    }
    public function getNome()
    {
        return $this->nome;
    }
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

$logar = new Login("teste@teste.com", "123456", "TESTE");

$logar->logar();



echo ("<br>" . $logar->getEmail() . "<br>" . $logar->getNome() . "<br>" . $logar->getsenha());
