<!DOCTYPE html>
<html>
    <body>
        <?php
        //Array com Chave => Valor
        $listaAlunoIdade = array(
            "Leonardo" => 31,
            "Gabriella" => 27,
            "Bianca" => 07
        );

// Array apenas com Valore
$listaCores = array(
    "Vermelho",
    "Amarelo",
    "Verde",
    "Laranja"
);

// Acesso ao item do array $listaAlunoIdade[CHAVE]
echo $listaAlunoIdade ["Leonardo"];

echo "<br />";

//Exibir em tela todo o conteúdo (chave e valor) de um array var_dump(array)
var_dump($listaAlunoIdade);
echo "<br />";

var_dump($listaCores);

?>
    </body>
</html>