<?php

function validarCpf(string $cpf): bool|string
{
    // Remover caracteres não numéricos do CPF
    $cpfNumerico = preg_replace('/[^0-9]/', '', $cpf);

    // Verificar se o CPF tem 11 dígitos
    if(strlen($cpfNumerico) !== 11){
        return 'CPF inválido';
    }

    // Expressão regular para validar o formato
    $regex = "/^\d{3}\.\d{3}\.\d{3}-\d{2}$/";

    // Verificar se o formato do CPF é válido
    if (!preg_match($regex, $cpf)) {
        return 'CPF inválido';
    }

    // Implementar lógica para validar dígitos verificadores aqui, se necessário

    // Se passou por todas as validações, consideramos válido
    return true;
}