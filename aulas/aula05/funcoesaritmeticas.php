<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcões matemáticas</title>
</head>
<body>
    <h1>Funções matemáticas</h1>
    <?php
        $v1 = $_GET["x"];
        $v2 = $_GET["y"];

        echo "<p>O valor absoluto de $v1 é: ". abs($v1). "</p>";
        echo "<p>$v1 elevado a $v2 é ". pow($v1, $v2)."</p>";
        echo "<p> A Raiz quadrada de $v1 é". sqrt($v1). "</p>";
        echo "<p> O arredondamento de $v1 é ". round($v1). "</p>";
        echo "<p> O valor inteiro de $v1 é ". intval($v1). "</p>";
        echo "<p>O valor $v1 formatado é R$". number_format($v1, 2 , ",", "."). "</p>";



    ?>    
</body>
</html>