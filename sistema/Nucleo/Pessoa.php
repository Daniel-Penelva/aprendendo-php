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
        $this->nome = (string) $nome; // Pode declarar o tipo do atributo
        $this->idade = (int) $idade;
        $this->cidade = (string) $cidade;
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

    /* Métodos mágicas para getters e setters */
    public function __get($propriedade){
        if(property_exists($this, $propriedade)){
            return $this->$propriedade;
        }else{
            trigger_error("A propriedade $propriedade não existe na classe Pessoa.", E_USER_NOTICE);
            return null;
        }
    }

    public function __set($propriedade, $valor){
        if(property_exists($this, $propriedade)){
            $this->$propriedade = $valor;
        }else{
            trigger_error("A propriedade $propriedade não existe na classe Pessoa.", E_USER_NOTICE);
        }
    }

    // Método mágico para exibir informações
    public function __toString()
    {
        return "Nome: {$this->nome}, Idade: {$this->idade}, Cidade: {$this->cidade}";
    }

}
