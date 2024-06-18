<?php
    class conta {
        public $saldo = 0;
        function depositar($valor) {
            $this->saldo += $valor;
    }
}

class contacorrente extends conta {
    function transferir($contadestino, $valor) {
        $this->saldo += $valor;
        }
}
$novaconta1 = new contacorrente();
$novaconta2 = new contacorrente();
$novaconta1 ->transferir('xxx-xxx', 500);
$novaconta2 ->depositar(500);
echo "saldo:".$novaconta ->$saldo;
echo "saldo:".$novaconta ->$saldo;



