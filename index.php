<?php

include 'Helpers.php';

echo ativado(true);

echo "<br />";

echo "Resultado: ", maiorIdade(15);

echo "<br />";

// Saída direta concatenando com um ponto '.'
echo "A pessoa pode entrar na festa? " . (maiorIdade(20) >= 18 ? "Sim" : "Não");

echo "<br />";

echo "R$ " . formatarValor(50);

echo "<br />";

echo "R$ " . formatarValor(50000);

echo "<br />";

echo formatarValorComTernario(0);

echo "<br />";

echo formatarValorComTernario(10);

echo "<br />";

echo formatarValorComTernario(4000);

echo "<br />";

echo formatarNumero(0);

echo "<br />";

echo formatarNumero(100);

echo "<br />";

echo formatarNumero(1000);

echo "<br />";

echo formatarNumero(10000);

echo "<br />";

echo formatarNumero(1000000000);