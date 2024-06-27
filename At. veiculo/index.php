<?php
// Veiculo.php

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

// Cria uma instância da classe Veiculo
$veiculo = new Veiculo("Toyota", "Corolla", 2023);

// Chama o método exibirDetalhes() para mostrar as informações do veículo
$veiculo->exibirDetalhes();
?>

