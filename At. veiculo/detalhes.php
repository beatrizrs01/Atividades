<?php
// index.php

require_once 'Moto.php';

// Criar uma instância da classe Moto
$moto = new Moto("Honda", "CBR 1000RR", 2022);

// Chamar o método exibirDetalhes() da classe Moto
$moto->exibirDetalhes();

// Chamar o método acelerar() da classe Moto
$moto->acelerar();
?>