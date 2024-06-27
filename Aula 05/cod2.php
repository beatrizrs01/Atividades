<!DOCTYPE html>
<html>
    <body>
        <?php
            // Verifica se campo1 está definido e não é vazio
            $campo1 = isset($_POST["campo1"]) ? htmlspecialchars($_POST["campo1"]) : "Não informado";
            // Verifica se campo2 está definido e não é vazio
            $campo2 = isset($_POST["campo2"]) ? htmlspecialchars($_POST["campo2"]) : "Não informado";

            echo "O valor de CAMPO 1 é: " . $campo1;
            echo "<br> O valor de CAMPO 2 é: " . $campo2;
        ?>
    </body>
</html>

