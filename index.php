<?php

include 'Helpers.php';

/* MATCH  - A estrutura de controle match foi introduzida no PHP 8.0 para facilitar comparações de valores em uma expressão mais concisa e semelhante a um switch.*/

// Exemplo Básico 1

$diaDaSemana = 3;

$resultado = match ($diaDaSemana) {
    1 => "Domingo",
    2 => "Segunda-feira",
    3 => "Terça-feira",
    4 => "Quarta-feira",
    5 => "Quinta-feira",
    6 => "Sexta-feira",
    7 => "Sábado",
    default => "Dia inválido",
};

echo $resultado;

echo '<br />';

// Exemplo Básico 2 - do tipo string
$diaDaSemana = date('w');

$resultado = match ($diaDaSemana) {
    '1' => "Domingo",
    '2' => "Segunda-feira",
    '3' => "Terça-feira",
    '4' => "Quarta-feira",
    '5' => "Quinta-feira",
    '6' => "Sexta-feira",
    '7' => "Sábado",
    default => "Dia inválido",
};

echo $resultado;

echo '<hr />';

// Exemplo com Condições Adicionais

$tipoAnimal = "gato";

$resultado = match ($tipoAnimal) {
    "cachorro", "gato" => "Animal doméstico",
    "leão", "tigre", "elefante" => "Animal selvagem",
    default => "Tipo de animal desconhecido",
};

echo $resultado;

echo '<hr />';

// Exemplo com Expressões Mais Complexas

$numero = 2;

$resultado = match (true) {
    $numero >= 1 && $numero <= 3 => "O número é 1, 2 ou 3",
    $numero == 4 => "O número é 4",
    default => "Número desconhecido",
};

echo $resultado;
