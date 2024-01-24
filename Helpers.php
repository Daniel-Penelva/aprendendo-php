<?php

// Lista de  funções e métodos - site: https://www.php.net/manual/pt_BR/indexes.functions.php

function horasSao(): string
{
    $hour = date('H');

    if ($hour >= 0 && $hour < 5) {
        $mensagem = "Boa madrugada";
    } elseif ($hour >= 5 && $hour < 12) {
        $mensagem = "Bom dia";
    } elseif ($hour >= 13 && $hour < 18) {
        $mensagem = "Boa tarde";
    } else {
        $mensagem = "Boa noite";
    }

    return $mensagem;
}

function meuTexto(string $texto, int $limite, string $continue = '...'): string
{

    $textoLimpo = trim($texto);

    if (strlen($textoLimpo) <= $limite) {
        return $textoLimpo;
    }

    $resumirTexto = substr($textoLimpo, 0, strrpos(substr($textoLimpo, 0, $limite), ''));

    return $resumirTexto . $continue;
}

// substr() - Retorna uma parte de uma string.
// strrpos() - encontra a posição do caracter.