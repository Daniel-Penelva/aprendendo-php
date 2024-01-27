<?php

class Circulo implements Forma{

    /* Circulo implementam a interface Forma */

    private $raio;

    public function __construct($raio)
    {
        $this->raio = $raio;
    }

    public function calcularArea()
    {
        return pi() * $this->raio * $this->raio;
    }
}
