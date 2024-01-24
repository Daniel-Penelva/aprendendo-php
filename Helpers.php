<?php

// $variavel = (condição) ? valor_se_verdadeiro : valor_se_falso;

function ativado($ativo)
{
    $variavel = ($ativo == true) ? "você está ativo" : "Você está inativado";
    return $variavel;
}

function maiorIdade(int $idade){
    return $status = ($idade >= 18) ? "Você é maior de idade." : "Você é menor de idade.";
}


// Método formatar valor sem operação ternaria
function formatarValor(float $valor): string{
    return number_format($valor,2, ',', '.'); // o 2 é de duas casas decimais...
}

// Método formatar valor COM operação ternaria + concatenando com R$
function formatarValorComTernario(float $valor = null): string{
    return "R$ " . number_format(($valor ? $valor : 0), 2, ',', '.');
}

function formatarNumero(string $numero = null){
    return number_format($numero ? $numero : 0, 0, '.', '.');
}