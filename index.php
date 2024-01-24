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

echo '<br />';

// Estrutura de Controle IF - chamando os métodos

echo maiorOuMenorIdade(19);
echo '<br />';
echo definirHora(18);

echo '<br />';
// Estrutura de Controle ELSEIF e ELSE - chamando os métodos

echo nota(40);
echo '<br />';
echo queHorasSao(16);

// Operadores Aritmeticos:
$soma = $a + $b;  // Adição
$subtracao = $a - $b;  // Subtração
$multiplicacao = $a * $b;  // Multiplicação
$divisao = $a / $b;  // Divisão
$resto = $a % $b;  // Resto da divisão

// Operadores de Comparação:
$igual = ($a == $b);  // Igual
$diferente = ($a != $b);  // Diferente
$maior = ($a > $b);  // Maior que
$menor = ($a < $b);  // Menor que
$maiorOuIgual = ($a >= $b);  // Maior ou igual
$menorOuIgual = ($a <= $b);  // Menor ou igual

// Operadores Lógicos:
$and = ($a && $b);  // E lógico (AND)
$or = ($a || $b);  // Ou lógico (OR)
$not = (!$a);  // Negação lógica (NOT)


// Operadores de Atribuição:
$a = 10;  // Atribuição simples
$a += 5;  // Atribuição com adição (equivalente a $a = $a + 5)
$a -= 3;  // Atribuição com subtração
$a *= 2;  // Atribuição com multiplicação
$a /= 4;  // Atribuição com divisão

// Operadores de Incremento/Decremento:
$a++;  // Incremento pós-fixado
++$a;  // Incremento pré-fixado
$a--;  // Decremento pós-fixado
--$a;  // Decremento pré-fixado
