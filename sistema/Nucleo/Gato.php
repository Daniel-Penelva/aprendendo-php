<?php

class Gato extends Animal
{

    protected $raca;
    protected $cor;

    // Construtor
    public function __construct($raca, $cor)
    {
        $this->raca = $raca;
        $this->cor = $cor;
    }

    // Métodos setters e getters
    public function setRaca($raca)
    {
        $this->raca = $raca;
    }

    public function getRaca()
    {
        return $this->raca;
    }

    public function setCor($cor)
    {
        $this->cor = $cor;
    }

    public function getCor()
    {
        return $this->cor;
    }

    // Métodos especificos
    public function arranharMoveis()
    {
        echo "Arranhando móveis!\n";
    }
}
