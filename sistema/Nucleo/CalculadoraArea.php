<?php

class CalculadoraArea
{
    /* CalculadoraArea é uma classe que pode calcular a área de qualquer objeto que implemente a interface Forma */ 

    public function calcular(Forma $forma)
    {
        return $forma->calcularArea();
    }
}
