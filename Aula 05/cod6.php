<?php
    class conta {
        public $saldo = 0;
        function depositar($valor) {
            $this->saldo += $valor;
        }
    }

    class contacorrente extends conta {
        function transferir($contadestino, $valor) {
            $this->saldo -= $valor;
            $contadestino->saldo += $valor;
        }
    }

    $novaconta1 = new contacorrente();
    $novaconta2 = new contacorrente();
    $novaconta1->transferir($novaconta2, 500);
    $novaconta2->depositar(500);
    echo "saldo da novaconta1: " . $novaconta1->saldo . "<br>";
    echo "saldo da novaconta2: " . $novaconta2->saldo . "<br>";
?>