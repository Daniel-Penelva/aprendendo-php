<?php

include 'Helpers.php';
# declare(strict_types = 1)

// Chamando a função sem parametro
echo saudacao();

echo '<br />';

// chamando a função com parametro

echo ola('João');

echo '<br />';

$nomeVisitante = 'Daniel';
$OlaDaniel = ola($nomeVisitante);

echo $OlaDaniel;

echo '<br />';

// chamando a função com mais de um parametro
$cor = 'azul';
$comidaPreferida = 'carne seca com abóbora';

$resultado = corEComidaPreferida($cor, $comidaPreferida);
echo $resultado;

echo '<br />';

// atribuindo outro valor na variavel $ponto
$ponto = '...';

$resultado = corEComidaPreferida($cor, $comidaPreferida, $ponto);
echo $resultado;

echo '<br />';

// Tipos de dados
$string = 'texto';
$int = 10;
$float = 9.99;
$boolean = true;
$nulo = null;

var_dump($string);
var_dump($float);

// chamando tipo de dados pela função
$resultado = somar(10, 40);
echo "Resultado: ", $resultado;

echo '<br />';

$texto = 'Esse é um texto qualquer';
echo textoQualquer($texto);

echo '<br />';

$name = "Daniel Penelva";
echo nomeEIdade($name, 34);

/*
A declaração declare(strict_types=1); é usada para ativar o modo estrito de tipos no PHP. Isso significa que as verificações de tipo serão 
realizadas de forma mais rigorosa durante a execução do script, especialmente para as declarações de tipo de parâmetro e de retorno em funções.
*/