<?php

include 'Helpers.php';

/* As expressões regulares em PHP são manipuladas principalmente através de funções como preg_match, preg_replace e outras relacionadas ao
PCRE (Perl Compatible Regular Expressions). Site: https://www.php.net/manual/pt_BR/ref.pcre.php */

// Validar um E-mail

$email = "usuario@dominio.com";

if (preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/", $email)) {
    echo "E-mail válido!";
} else {
    echo "E-mail inválido!";
}

/* Explicando passo a passo o exemplo acima: 

    ^: Indica o início da string.
    [a-zA-Z0-9._-]+: Corresponde a uma ou mais ocorrências de letras (maiúsculas ou minúsculas), dígitos, pontos, underscores ou hífens.
    @: Corresponde ao caractere "@".
    [a-zA-Z0-9.-]+: Corresponde a uma ou mais ocorrências de letras (maiúsculas ou minúsculas), dígitos, pontos ou hífens (usados para o domínio antes da extensão).
    \.: Corresponde a um ponto literal (é necessário escapar o ponto com \ porque o ponto tem um significado especial em expressões regulares).
    [a-zA-Z]{2,6}: Corresponde a duas a seis letras (maiúsculas ou minúsculas) para representar a extensão do domínio.
    $: Indica o final da string.
*/ 

echo '<hr />';
// Extrair Números de uma String

$texto = "A temperatura é 25 graus Celsius.";

preg_match_all("/\b\d+\b/", $texto, $numeros);

print_r($numeros[0]); // Saída: Array ( [0] => 25 )


echo '<hr />';
// Substituir Espaços por Underlines

$frase = "Isso é um exemplo de frase com espaços.";

$novaFrase = preg_replace("/\s+/", "_", $frase);

echo $novaFrase; // Saída: Isso_é_um_exemplo_de_frase_com_espaços.

echo '<hr />';
// Validar um Número de Telefone

$telefone = "+55 (11) 1234-5678";

if (preg_match("/^\+\d{2,3} \(\d{2,3}\) \d{4}-\d{4}$/", $telefone)) {
    echo "Número de telefone válido!";
} else {
    echo "Número de telefone inválido!";
}

echo '<hr />';
// Extrair Tags HTML

$html = "<p>Este é um <strong>exemplo</strong> de HTML.</p>";

preg_match_all("/<[^>]+>/", $html, $tags);

print_r($tags[0]); // Saída: Array ( [0] => <p> [1] => <strong> [2] => </strong> [3] => </p> )

echo '<hr />';
// Validar uma Data no Formato YYYY-MM-DD

$data = "2022-01-22";

if (preg_match("/^\d{4}-\d{2}-\d{2}$/", $data)) {
    echo "Data válida!";
} else {
    echo "Data inválida!";
}


echo '<hr />';
// Chamando método CPF
$cpf = "123.456.789-09";
$resultado = validarCpf($cpf);

if ($resultado === true) {
    echo "CPF válido";
} else {
    echo $resultado;
}

/*
As expressões regulares são padrões utilizados para realizar correspondências ou manipular strings de acordo com regras específicas. Em PHP, as expressões regulares são manipuladas principalmente através das funções relacionadas ao PCRE (Perl Compatible Regular Expressions).
Alguns dos elementos básicos e tipos de expressões regulares:

Caracteres Literais:
    Correspondem exatamente ao mesmo caractere na string. Exemplo: `abc` corresponde à sequência "abc".

Classes de Caracteres:
    Representam um conjunto de caracteres e podem ser definidas utilizando colchetes `[]`. Exemplo: `[aeiou]` corresponde a qualquer vogal.

Metacaracteres:
    São caracteres com significados especiais, como `.` (corresponde a qualquer caractere) e `*` (corresponde a zero ou mais ocorrências do caractere anterior).

Âncoras:
    Representam posições em uma string. Exemplo: `^` representa o início da string, e `$` representa o final.

Quantificadores:
    Especificam a quantidade de ocorrências de um caractere ou grupo. Exemplos: `*` (zero ou mais), `+` (um ou mais), `?` (zero ou um).

Grupos de Captura:
    São usados para agrupar parte de uma expressão para aplicar quantificadores ou realizar capturas. Exemplo: `(abc)+` corresponde a "abc", "abcabc", etc.

Alternância:
    Representa escolha entre alternativas. Exemplo: `a|b` corresponde a "a" ou "b".

Escape de Caracteres:
    Utilizado para tratar um caractere especial como um caractere literal. Exemplo: `\.` corresponde ao ponto literal.

Modificadores:
    São usados após o delimitador de fechamento `/` para modificar o comportamento da expressão regular. Exemplo: `/i` torna a correspondência de caracteres maiúsculos/minúsculos insensível.

a-z e A-Z:
    a-z corresponde a qualquer letra minúscula de "a" a "z".
    A-Z corresponde a qualquer letra maiúscula de "A" a "Z".
    Em conjunto, [a-zA-Z] corresponde a qualquer letra, independentemente de ser maiúscula ou minúscula.

0-9:
    Corresponde a qualquer dígito de "0" a "9".

{2,6}:
    É um quantificador que especifica o número de ocorrências permitido.
    {2,6} significa que o padrão anterior (caractere, classe de caractere ou grupo) deve ocorrer de 2 a 6 vezes.

*/