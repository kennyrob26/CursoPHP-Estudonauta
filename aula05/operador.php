<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
    <h1>Operadores Aritméticos</h1>
    <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];

        echo "A soma vale " . ($n1+$n2);
        echo "<br/> A subtracao vale ". ($n1-$n2);
        echo "<br/> A multiplicação vale ". ($n1*$n2);
        echo "<br/> A divisão vale ". ($n1/$n2);
        echo "<br/> O modulo vale ". ($n1%$n2)
    ?>
</body>
</html>