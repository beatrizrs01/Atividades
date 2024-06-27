<?php
// Definição da classe Veiculo
class Veiculo {
    protected $marca;
    protected $modelo;
    protected $ano;

    public function __construct($marca, $modelo, $ano) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    public function exibirDetalhes() {
        echo "Marca: " . $this->marca . "<br>";
        echo "Modelo: " . $this->modelo . "<br>";
        echo "Ano: " . $this->ano . "<br>";
    }
}

// Definição da classe Carro, que herda de Veiculo
class Carro extends Veiculo {
    public function __construct($marca, $modelo, $ano) {
        parent::__construct($marca, $modelo, $ano);
    }

    public function exibirDetalhes() {
        parent::exibirDetalhes();
        echo "Tipo: Carro<br>";
    }

    public function acelerar() {
        echo "O carro está acelerando muito rápido.<br>";
    }
}

// Criar uma instância da classe Carro e exibir suas informações
$carro = new Carro("Ford", "Focus", 2020);
$carro->exibirDetalhes();
$carro->acelerar();
?>

