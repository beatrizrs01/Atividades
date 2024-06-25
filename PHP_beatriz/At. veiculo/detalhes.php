<?php
require_once 'Carro.php';
require_once 'Moto.php';

$carro = new Carro("Toyota", "Corolla", 2020);

$moto = new Moto("Honda", "CB500", 2019);

echo "<h3>Detalhes do Carro:</h3>";
$carro->exibirDetalhes();
$carro->acelerar();

echo "<h3>Detalhes da Moto:</h3>";
$moto->exibirDetalhes();
$moto->acelerar();
?>