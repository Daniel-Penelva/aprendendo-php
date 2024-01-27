<?php

include 'Helpers.php';
include './sistema/Nucleo/Pessoa.php';
include './sistema/Nucleo/Animal.php';
include './sistema/Nucleo/Cachorro.php';
include './sistema/Nucleo/Gato.php';

// Criando uma instância da classe Pessoa
$pessoa = new Pessoa();

// Atribuindo valores utilizando métodos setters
$pessoa->setNome("Daniel");
$pessoa->setIdade(25);
$pessoa->setCidade("Rio de Janeiro");

// Obtendo valores utilizando métodos getters
$nome = $pessoa->getNome();
$idade = $pessoa->getIdade();
$cidade = $pessoa->getCidade();

// Exibindo os valores conforme necessário
echo "Nome: $nome, Idade: $idade, Cidade: $cidade";

echo '<hr />';

// Criando uma instância da classe Pessoa
$pessoa1 = new Pessoa();

// Capturando valores de pessoa pelo construtor
$pessoa1->__construct("Gabriela", 23, "São Paulo");

// Chamando o método exibirInformacoes da instância criada
echo $pessoa1->exibirInformacao();

echo '<hr />';

// Exibindo os métodos para encadeamento de métodos
$pessoa2 = new Pessoa();

echo $pessoa2->definirNome("Bolsonaro")
        ->definirIdade(68)
        ->definirCidade("Minas Gerais")
        ->exibirInformacao();

echo '<hr />';

// Exemplo de uso dos métodos mágicos
/*Os métodos mágicos no PHP são métodos especiais que começam e terminam com dois underscores (__). Eles são chamados automaticamente em certas 
situações.*/
$pessoa2 = new Pessoa('João', 25, 'São Paulo');

echo "Nome: " . $pessoa2->__get('nome') . '<br />'; // Usando o método mágico __get para obter o valor de uma propriedade
echo "Idade: " . $pessoa2->__get('idade') . '<br />';
echo "Cidade: " . $pessoa2->__get('cidade') . '<br />';

echo '<br />';

$pessoa2->__set('nome', 'Kaio');
$pessoa2->__set('idade', 30);
$pessoa2->__set('cidade', 'Santa Catarina');

echo "Nome: " . $pessoa2->__get('nome') . '<br />'; // Usando o método mágico __get para obter o valor de uma propriedade
echo "Idade: " . $pessoa2->__get('idade') . '<br />';
echo "Cidade: " . $pessoa2->__get('cidade') . '<br />';

echo '<br />';

// Usando o método mágico __toString para exibir informações
echo $pessoa2;

echo '<br />';

echo $pessoa1->__toString(); // Usando o método mágico __toString para exibir informações

echo '<hr />';

// Exemplo de encadeamento de da criação da classe e seus métodos.
echo (new Pessoa())->definirNome("Ulisses")->definirIdade(23)->definirCidade('Maranhão');

echo '<hr />';

/* <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< HERANÇA >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> */

// Criando SuperClasse

$animal = new Animal();

$animal->setNome('Rex');

echo 'Nome:' . $animal->getNome();

echo '<br />';
// Ou pode criar por parametro pela classe
$animal1 = new Animal('Tobby');
echo 'Nome:' . $animal1->getNome();

echo '<br />';
// Ou pode criar pelo construtor
$animal1->__construct('Toto');
echo 'Nome:' . $animal1->getNome();

echo '<hr />';
// Criando a SubClasse

$cachorro = new Cachorro();

$cachorro->setNome("Bigodinho");
$cachorro->setRaca("Pastor Alemão");
$cachorro->setCor('Amarelo');

// Outra forma de fazer, criando variavel.
$nome = $cachorro->getNome();
$raca = $cachorro->getRaca();
$cor  = $cachorro->getCor();

echo "Nome: $nome, Raça: $raca, Cor: $cor";

echo '<br />';
// Criando pela Classe - exemplo Gato

$gato = new Gato('Siames', 'Cinza e preto');

$gato->setNome("Chicao"); // essa propriedade pertence a super classe Animal

$nome = $gato->getNome();
$raca = $gato->getRaca();
$cor  = $gato->getCor();

echo "Nome: $nome, Raça: $raca, Cor: $cor";
