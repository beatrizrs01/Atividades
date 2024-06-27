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

// Definição da classe Moto, que herda de Veiculo
class Moto extends Veiculo {

    public function __construct($marca, $modelo, $ano) {
        parent::__construct($marca, $modelo, $ano);
    }

    public function exibirDetalhes() {
        parent::exibirDetalhes();
        echo "Tipo: Moto<br>";
    }

    public function acelerar() {
        echo "A moto está acelerando muito rápido.<br>";
    }
}

// Criar uma instância da classe Moto e exibir suas informações
$moto = new Moto("Honda", "CBR 1000RR", 2022);
$moto->exibirDetalhes();
$moto->acelerar();
?>
