<?php

/**
 * Conta o tempo decorrido de uma data
 * @param string $data
 * @return string
 */

function contarTempo(string $data)
{
    var_dump($data);
    echo '<hr>';
    echo $agora = date('Y-m-d H:i:s');
    echo '<hr>';
    echo $horaDeAgoraTotalSegundos = strtotime(date('Y-m-d H:i:s'));
    echo '<hr>';
    echo $TotalSegundoData = strtotime($data);
    echo '<hr>';
    $diferenca = $TotalSegundoData - $horaDeAgoraTotalSegundos;
    var_dump('Diferença entre o total de segundos:' . $diferenca);
    echo '<hr>';
    $segundos = $diferenca;
    var_dump('Diferença entre segundos:' . $segundos);
    echo '<hr>';
    $minutos = round($diferenca / 60);
    var_dump('Diferença entre minutos:' . $minutos);
    echo '<hr>';
    $horas = round($diferenca / 3600);
    var_dump('Diferença entre horas:' . $horas);
    echo '<hr>';
    $dia = round($diferenca / 86.400);
    var_dump('Diferença entre dias:' . $dia);

    echo '<hr>';

    if ($segundos <= 60) {
        return 'agora';
    } elseif ($minutos <= 60) {
        return $minutos == 1 ? 'há um minuto' : 'há ' . $minutos . ' minutos';
    } elseif ($horas <= 24) {
        return $horas == 1 ? 'há 1 hora' : 'há ' . $horas . ' horas';
    }
}

// Tipos de Filtro

function validarEmail(string $email): bool
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function validarUrl(string $url): bool
{
    return filter_var($url, FILTER_VALIDATE_URL);
}

// Customizando filtro

function customizarFiltroUrl(string $url): bool
{
    if (strlen($url) < 10) { // tem que ter mais de nove caracteres
        return false;
    }
    if (!str_contains($url, '.')) { // tem que conter o ponto, senão tiver retorna false (!negação)
        return false;
    }
    if(str_contains($url, 'http://') || str_contains($url, 'https://')){ // tem que conter o http:// ou o https://
        return true;
    }
    return false;
}
