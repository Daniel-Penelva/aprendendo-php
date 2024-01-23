<?php

// Função sem entrada de parâmetro
function saudacao()
{
    return 'Olá PHP!';
}

// Função com entrada de parâmetro
function ola($nome)
{
    return "Olá, $nome!";
}

// Função com mais de uma entrada de parâmetro
function corEComidaPreferida($cor, $comida, $ponto='!!!'){
    return "Você gosta da cor $cor e sua comida preferida é $comida, muito legal$ponto";
}

// tipos de dados
function somar(int $num1, int $num2): int{
    return $num1 + $num2;
}

function textoQualquer(string $texto): string {
    return $texto;
}

function nomeEIdade(string $name, int $idade): string{
    return "Seu nome é $name e sua idade é $idade.";
}