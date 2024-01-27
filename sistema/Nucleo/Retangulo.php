<?php

class Retangulo implements Forma
{
    /* Retângulo implementam a interface Forma */

    private $largura;
    private $altura;

    public function __construct($largura, $altura)
    {
        $this->largura = $largura;
        $this->altura = $altura;
    }

    public function calcularArea()
    {
        return $this->largura * $this->altura;
    }
}
