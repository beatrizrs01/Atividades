<?php

require_once 'Veiculo.php';

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
?>