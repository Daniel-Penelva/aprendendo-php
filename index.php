<?php

include 'Helpers.php';

echo '<br />';

/** Exemplo de PHPDoc
 * @param string $texto Olá Mundo!
 * @param int $limite quantidade de caracteres!
 * @param string $continue opcional - o que deve ser exibido ao final do resumo.
 * @return string texto para...
 * PHPDoc reference - site: https://docs.phpdoc.org/3.0/guide/references/phpdoc/index.html#phpdoc-reference
 * Lista de  funções e métodos - site: https://www.php.net/manual/pt_BR/indexes.functions.php
*/


echo horasSao(); // Saida: vai depender do horário que rodar o programa

echo '<br />';

$texto = 'texto para resumir';
echo meuTexto($texto, 10); // Saída: texto para...

echo '<br />';
// Testando alguns métodos

// strlen() - Obtém o comprimento de uma string:
$texto = "Olá, mundo!";
$comprimento = strlen($texto);
echo $comprimento;  // Saída: 12

echo '<br />';

$texto = "   Esse é outro texto   ";
$comprimento = strlen(trim($texto));
echo $comprimento;  // Saída: 19

echo '<br />';

// strtolower() - Converte uma string para minúsculas:
$texto = "Olá, Mundo!";
$textoMinusculo = strtolower($texto);
echo $textoMinusculo;  // Saída: olá, mundo!

echo '<br />';

// strtoupper() - Converte uma string para maiúsculas:
$texto = "Olá, Mundo!";
$textoMaiusculo = strtoupper($texto);
echo $textoMaiusculo;  // Saída: OLÁ, MUNDO!

echo '<br />';

// substr() - Retorna uma parte de uma string:
$texto = "Olá, mundo!";
$parte = substr($texto, 0, 3);
echo $parte;  // Saída: Olá

echo '<br />';

// strrpos() - encontra a posição do caracter:
$texto = "Olá, mundo!";
echo $ocorrencia = strrpos($texto, 'm'); // Saída: 6

echo '<br />';

// strrpos() - limpa as tags html:
$texto = "<h1>Olá</h1>, <h2>mundo!</h2>";
$limpaTags = strip_tags($texto);
echo $limpaTags; // Saíde: Olá, mundo!

echo '<br />';
// Funções de Manipulação de Arrays:

// count() - Conta o número de elementos em um array:
$frutas = array("maçã", "banana", "laranja");
$quantidade = count($frutas);
echo $quantidade;  // Saída: 3

echo '<br />';

// in_array() - Verifica se um valor existe em um array:
    $frutas = array("maçã", "banana", "laranja");
    $existeBanana = in_array("banana", $frutas);
    echo $existeBanana ? "Sim" : "Não";  // Saída: Sim

echo '<br />';

// array_push() - Adiciona um ou mais elementos ao final de um array:
$frutas = array("maçã", "banana");
array_push($frutas, "laranja", "morango");
print_r($frutas);  // Saída: Array ( [0] => maçã [1] => banana [2] => laranja [3] => morango )

echo '<br />';

// Funções de Manipulação de Data e Hora:
// date() - Formata a data e a hora atuais:
$dataAtual = date("d/m/Y H:i:s");
echo $dataAtual;  // Saída: 22/01/2024 10:30:00 (exemplo)

echo '<br />';

// strtotime() - Converte uma descrição de data/hora textual em timestamp:
$dataFutura = strtotime("+1 week");
echo date("d/m/Y", $dataFutura);  // Saída: 29/01/2024 (exemplo)



