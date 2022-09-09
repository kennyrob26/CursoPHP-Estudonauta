<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>
    <?php
        include "funcoes.php";
        $x = 10;
        $y = 20;
        $som = soma($x, $y);
        $sub = subtracao($x, $y);
        echo "<p>A soma de $x + $y é $som</p>";
        echo "<p>A subtração de $x - $y é $sub</p>";
        
    ?>
</body>
</html>