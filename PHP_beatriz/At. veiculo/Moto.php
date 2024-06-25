<?php

require_once 'Veiculo.php';

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
?>