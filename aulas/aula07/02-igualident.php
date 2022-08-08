<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>A diferença de Igual e Idêntico em PHP</h1>
    <?php
        $a = 3;
        $b = "3";
        $igual = $a == $b ? "SIM" : "NÃO";
        $identica = $a === $b ? "SIM" : "NÃO";
        echo "<p>A variável A tem valor: <strong>$a</strong></p>";
        echo "<p>A variável B
         tem valor: <strong>$b</strong></p>";
        echo "<p>A variável A e B são iguais?<strong> $igual</strong></p>";
        echo "<p>As variáveis A e B são idênticas? <strong>$identica</strong></p>";
    ?>
    
</body>
</html>