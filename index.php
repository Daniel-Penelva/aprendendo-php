<?php

include 'Helpers.php';

// SWITCH

// Exemplo básico

$diaDaSemana = date('w');

switch ($diaDaSemana) {
    case 1:
        echo 'Domingo';
        break;
    case 2:
        echo 'Segunda-feira';
        break;
    case 3:
        echo 'Terça-feira';
        break;
    case 4:
        echo 'Quarta-feira';
        break;
    case 5:
        echo 'Quinta-feira';
        break;
    case 6:
        echo 'Sexta-feira';
        break;
    case 7:
        echo 'Sábado';
        break;
    default:
        echo 'dia inválido';
}

echo '<hr />';

// Exemplo com Múltiplas Condições

$tipoAnimal = "gato";

switch ($tipoAnimal) {
    case "cachorro":
    case "gato":
        echo "Animal doméstico";
        break;
    case "leão":
    case "tigre":
    case "elefante":
        echo "Animal selvagem";
        break;
    default:
        echo "Tipo de animal desconhecido";
}

echo '<hr />';

// Exemplo com Fall-Through

$numero = 2;

switch ($numero) {
    case 1:
    case 2:
    case 3:
        echo "O número é 1, 2 ou 3";
        break;
    case 4:
        echo "O número é 4";
        break;
    default:
        echo "Número desconhecido";
}

echo '<hr />';

// Exemplo de switch com condicão de controle

$nota = 5.0;

switch ($nota) {
    case $nota >= 0 && $nota < 5:
        echo 'Você está reprovado - nota: ' . $nota;
        break;
    case $nota >= 5 && $nota < 7:
        echo 'Você está em recuperação - nota: ' . $nota;
        break;
    case $nota >= 7 && $nota <= 10:
        echo 'Você está aprovado - nota: ' . $nota;
        break;
    default:
    echo 'nota inválida';
}
