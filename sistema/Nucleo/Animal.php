<?php

class Animal
{
    protected $nome;

    // Construtor
    public function __construct($nome = '')
    {
        $this->nome = $nome;
    }

    // Métodos setters e getters
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    // Método especifico
    public function fazerSom()
    {
        echo "Algum som genérico";
    }
}
