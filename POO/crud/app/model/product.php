<?php

class Product
{
    private $id, $nome, $descriçao;

    public function getNome()
    {
        return $this->nome;
    }


    public function setNome($nome)
    {
        $this->nome = $nome;
    }


    public function getDescriçao()
    {
        return $this->descriçao;
    }


    public function setDescriçao($descriçao)
    {
        $this->descriçao = $descriçao;
    }


	public function getId() {
		return $this->id;
	}
	

	public function setId($id) {
		$this->id = $id;
		}
}
