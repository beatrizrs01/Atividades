<?php
// Definição da classe Funcionario
class Funcionario {
    // Propriedades da classe Funcionario
    protected $nome;
    protected $idade;
    protected $salario;

    // Construtor da classe Funcionario
    public function __construct($nome, $idade, $salario) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->salario = $salario;
    }

    // Método para exibir informações do Funcionario
    public function exibirInformacoes() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Idade: " . $this->idade . "<br>";
        echo "Salário: " . $this->salario . "<br>";
    }
}

// Cria uma instância da classe Funcionario e exibe suas informações
$funcionario = new Funcionario("Diego", 30, 5000);
$funcionario->exibirInformacoes();
?>

