<?php

include 'Helpers.php';

// ARRAYS

// 1. ARRAYS NUMÉRICOS

$numeros = array(1, 2, 3, 4, 5);

print_r($numeros);
echo '<br />';
var_dump($numeros);

echo '<hr />';

// 2. ARRAY ASSOCIATIVO
$pessoa = array(
    'nome' => 'João',
    'idade' => 25,
    'cidade' => 'Rio de Janeiro'
);

print_r($pessoa);

echo '<hr />';

// 3. ARRAY MULTIDIMENSIONAL
$alunos = array(
    array('nome' => 'Maria', 'nota' => 5.7),
    array('nome' => 'Renato', 'nota' => 6.9),
    array('nome' => 'Biana', 'nota' => 9.1)
);

print_r($alunos);

echo '<hr />';

// 4. ADICIONAR ELEMENTO NO FINAL DO ARRAY

$frutas = array('maçã', 'banana');
$frutas[] = 'laranja';
print_r($frutas);

echo '<hr />';

// 5. ITERAR POR UM ARRAY

$cores = array('vermelho', 'verde', 'azul');

foreach ($cores as $cor) {
    echo $cor . " ";
}
// Saída: vermelho verde azul

echo '<hr />';

// 6. CONTAR O NÚMERO DE ELEMENTOS EM UM ARRAY

$animais = array('cachorro', 'gato', 'peixe');
$quantidade = count($animais);
echo $quantidade;  // Saída: 3

echo '<hr />';

// 7. ENCONTRAR UM ELEMENTO EM UM ARRAY
$frutas = array('maçã', 'banana', 'laranja');
$posicao = array_search('banana', $frutas);
echo $posicao;  // Saída: 1

echo '<hr />';

// 8. FILTRAR ELEMENTOS EM UM ARRAY

$idades = array(25, 18, 30, 22, 35, 17, 56);
$adultos = array_filter($idades, function ($idade) {
    return $idade >= 18;
});
print_r($adultos);

echo '<hr />';

// 9. TRANSFORMAR UM ARRAY EM STRING

$nomes = array('João', 'Maria', 'Carlos');
$nomesString = implode(', ', $nomes);
echo $nomesString;  // Saída: João, Maria, Carlos

echo '<hr />';

// 10. CRIAR ARRAY A PARTIR DE STRING

$frutasString = 'maçã, banana, laranja';
$frutasArray = explode(', ', $frutasString);
print_r($frutasArray);

echo '<hr />';

// 11. PODE UTILIZAR COLCHETES 
$carros = ['Mustang', 'Ferrari', 'Porsche'];
print_r($carros);

echo '<br />';

foreach($carros as $listaCarros){
    echo $listaCarros . '<br />';
}

echo '<hr />';

// Chamando o método
echo dataAtual();
