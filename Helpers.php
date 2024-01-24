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
function corEComidaPreferida($cor, $comida, $ponto = '!!!')
{
    return "Você gosta da cor $cor e sua comida preferida é $comida, muito legal$ponto";
}

// tipos de dados
function somar(int $num1, int $num2): int
{
    return $num1 + $num2;
}

function textoQualquer(string $texto): string
{
    return $texto;
}

function nomeEIdade(string $name, int $idade): string
{
    return "Seu nome é $name e sua idade é $idade.";
}

// Estrutura de controler IF
function maiorOuMenorIdade($idade)
{
    if ($idade >= 18) {
        return  'Você é maior de idade.';
    } else {
        return 'Você é menor de idade.';
    }
}

function definirHora($hora)
{
    $msg = ''; // Por não ter o else, não dará erro caso aicione um valor acima de 5.

    if ($hora > 0 && $hora <= 5) {
        $msg = "boa madrugada";
    }
    if ($hora == 10 || $hora == 18) {
        $msg = "hora do lanche";
    }

    return $msg;
}


// Estrutura de Controle ELSEIF e ELSE
function nota($nota)
{
    if ($nota >= 90) {
        return "Você obteve um A";
    } elseif ($nota >= 80) {
        return "Você obteve um B";
    } elseif ($nota >= 70) {
        return "Você obteve um C";
    } else {
        return "Você precisa melhorar";
    }
}

function queHorasSao($horario)
{

    if ($horario >= 0 && $horario < 5) {
        $mensagem = "Boa madrugada";
    } elseif ($horario >= 5 && $horario < 12) {
        $mensagem = "Bom dia";
    } elseif ($horario >= 13 && $horario < 18) {
        $mensagem = "Boa tarde";
    } else {
        $mensagem = "Boa noite";
    }

    return $mensagem;
}
