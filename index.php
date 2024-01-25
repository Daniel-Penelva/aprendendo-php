<?php

include 'Helpers.php';

// Definindo as constantes
define('SITE_NOME', 'http://google.com');
define("DESCRICAO_SITE", "Site de pesquisa web");

// Outra forma de definir constante
const PROFISSAO = 'Desenvolvedor PHP';

// Definindo fuso horário padrão - Lista de fuso horário PHP - https://www.php.net/manual/pt_BR/timezones.php

$usandoTimezone = date_default_timezone_set('America/Manaus');
echo 'Usando Timezone:' . $usandoTimezone;

echo '<br />';

$data = date("d/m/Y H:i:s");
echo 'Formato data: ' . $data;

echo '<br />';

// Chamando o método
echo contarTempo('2022-01-25 12:42:15');

echo '<hr>';

// Tipos de Filtros - Email 
echo '<br />' . 'Função Validar Email:';
echo '<br />';
var_dump(validarEmail('teste'));
echo '<br />';
var_dump(validarEmail('teste@'));
echo '<br />';
var_dump(validarEmail('teste@gmail'));
echo '<br />';
var_dump(validarEmail('teste@gmail.com'));

echo '<hr>';

// Outro exemplo de validação de email
$email = 'd4n.andrade@gmail.com';

if (validarEmail($email)) {
    echo 'Email válido: ' . $email;
} else {
    echo 'Email inválido';
}


// Tipos de Filtros - URL
echo '<hr>';
echo '<br />' . 'Função Validar URL:';
echo '<br />';
var_dump(validarUrl('teste'));
echo '<br />';
var_dump(validarUrl('teste.com'));
echo '<br />';
var_dump(validarUrl('http://teste.com'));
echo '<br />';
echo '<hr>';

// Filtro url customizado
$url_1 = 'http://teste.com.br';
$url_2 = 'teste.com.br';
var_dump(customizarFiltroUrl($url_1));
echo '<br />';
var_dump(customizarFiltroUrl($url_2));

echo '<br />';
echo '<hr>';

// Chamando as funções das constantes da define
echo SITE_NOME;
echo '<br />';
echo DESCRICAO_SITE;

// Chamando as funções das constantes da const
echo '<br />';
echo PROFISSAO;

// criando constant utilizando a função constant()
echo '<br />';
echo constant('PROFISSAO');
echo '<br />';

// OBS. Não pode haver constantes com o mesmo nome da variável.
// OBS. É possivel utilizar constantes em estrutura de controle IF apenas utilizando o define, por exemplo:
if(true)
{
    define('LINGUAGEM_PROGRAMACAO', 'PHP');
    echo LINGUAGEM_PROGRAMACAO;
}else{
    echo 'Erro';
}
