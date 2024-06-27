<!DOCTYPE html>
<html>
    <body>
        <?php
            $a = 1;
            $b = 1;
            $c = "Léo";
            $d = "Léo";

            // Igual: ==
            $resultado1 = $a == $b; // Esta expressão retorna TRUE

            // Idêntico: ===
            $resultado2 = $a === $b; // Esta expressão retorna FALSE

            // Diferente: != ou <>
            $resultado3 = $a != $c; // Esta expressão retorna TRUE

            // Menor que: <
            $resultado4 = $a < $b; // Esta expressão retorna FALSE

            // Maior que: >
            $resultado5 = $a > $b; // Esta expressão retorna FALSE

            // Menor ou Igual: <=
            $resultado6 = $a <= $b; // Esta expressão retorna TRUE

            // Maior ou Igual: >=
            $resultado7 = $a >= $b; // Esta expressão retorna TRUE
        ?>

        <!-- Exibição dos resultados -->
        <p>Igual (==): <?php echo var_export($resultado1, true); ?></p>
        <p>Idêntico (===): <?php echo var_export($resultado2, true); ?></p>
        <p>Diferente (!= ou <>): <?php echo var_export($resultado3, true); ?></p>
        <p>Menor que (<): <?php echo var_export($resultado4, true); ?></p>
        <p>Maior que (>): <?php echo var_export($resultado5, true); ?></p>
        <p>Menor ou Igual (<=): <?php echo var_export($resultado6, true); ?></p>
        <p>Maior ou Igual (>=): <?php echo var_export($resultado7, true); ?></p>
    </body>
</html>
