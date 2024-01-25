<?php

function dataAtual(): string
{
    $dia = date('d');
    $indiceArray = date('w');
    $mes = date('m') - 1;
    $ano = date('Y');

    $diasSemana = ['domingo', 'segunda-feira', 'terça-feira', 'quarta-feira', 'quinta-feira', 'sexta-feira', 'sábado'];

    $meses = [
        'Janeiro',
        'Fevereiro',
        'Março',
        'Abril',
        'Maio',
        'Junho',
        'Julho',
        'Agosto',
        'Setembro',
        'Outubro',
        'Novembro',
        'Dezembro'
    ];

    return 'Dia da semana: ' . $diasSemana[$indiceArray] . ' - ' . $dia . '/ ' . $meses[$mes] . '/ ' . $ano . ' - indice do array: ' . $indiceArray;
}
