<?php

include 'Helpers.php';

// Exemplos de For

for ($i = 1; $i <= 5; $i++) {
    echo $i . " ";
} // Saída: 1 2 3 4 5


echo '<hr />';

for($y = 1; $y <= 10; $y++){
    echo $y % 2 ? $y . ' é impar' : $y . ' é par' . '<br />';
}

echo '<hr />';

$numero = 5;

for($n = 1; $n <= 10; $n++){
    echo $n . 'x' . $numero . ' = ' . $n*$numero . '<br />';
}

echo '<hr />';

// Exemplo while

$i = 1;

while ($i <= 5) {
    echo $i . " ";
    $i++;
}
// Saída: 1 2 3 4 5

echo '<hr />';

// Exemplo do...while()

$i = 1;

do {
    echo $i . " ";
    $i++;
} while ($i <= 5);
// Saída: 1 2 3 4 5

echo '<hr />';

// Exemplo continue

for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) {
        continue; // Pula a iteração quando $i é igual a 3
    }
    echo $i . " ";
}
// Saída: 1 2 4 5

echo '<hr />';

// Exemplo break
$i = 1;

while ($i <= 5) {
    if ($i == 4) {
        break; // Sai do loop quando $i é igual a 4
    }
    echo $i . " ";
    $i++;
}
// Saída: 1 2 3

