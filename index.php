<?php

include 'Helpers.php';
include './sistema/Nucleo/Pessoa.php';

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
        -> definirIdade(68)
        -> definirCidade("Minas Gerais")
        -> exibirInformacao();