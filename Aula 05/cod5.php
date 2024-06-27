<?php
class Usuario {
    // Atributos da classe
    public $nome;
    protected $cpf;
    private $endereco;

    // Construtor da classe
    public function __construct() {
        $this->preparaUsuario();
    }

    // Métodos
    private function preparaUsuario() {
        $this->nome = "Leonardo";
        $this->cpf = "9999999999";
        $this->endereco = "Rua Fulano de Tal número 0";
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEndereco() {
        return $this->endereco;
    }
}

// Instanciando o objeto e acessando seus respectivos métodos
$usu = new Usuario();
echo "Nome: " . $usu->getNome() . "<br>";
echo "CPF: " . $usu->getCpf() . "<br>";
echo "Endereço: " . $usu->getEndereco() . "<br>";
?>