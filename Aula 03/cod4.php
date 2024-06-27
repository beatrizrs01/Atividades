<!DOCTYPE html>
<html>
    <body>
        <?php
            $nome = 'fulano';

            switch ($nome) {
                case 'Fulano':
                    echo 'E ai Fulano!';
                break;
                case 'Sicrano':
                    echo 'E ai Sicrano';
                break;

                default:
                    echo 'Qual é o seu nome?';
                break;
            }
        // Resultado é: E ai Fulano!
        ?>
    </body>
</html>
