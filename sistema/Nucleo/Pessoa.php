<?php

class Pessoa
{

    // Atributos da classe
    private $nome;
    private $idade;
    private $cidade;


    // Construtor que aceita argumentos
    public function __construct($nome = '', $idade = 0, $cidade = '')
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cidade = $cidade;
    }

    // Métodos setters e getters
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }

    public function getCidade()
    {
        return $this->cidade;
    }

    // Método da classe para exibir informações
    public function exibirInformacao()
    {
        return "Nome: {$this->nome}, Idade: {$this->idade}, Cidade: {$this->cidade}";
    }

    // Métodos para encadeamento de métodos
    public function definirNome($nome): Pessoa
    {
        $this->nome = $nome; // recebe o parâmetro $nome
        return $this;
    }

    public function definirIdade($idade): Pessoa
    {
        $this->idade = $idade;
        return $this;
    }

    public function definirCidade($cidade)  // Repare que não precisa atribuir o tipo Pessoa
    {
        $this->cidade = $cidade;
        return $this;
    }

}
