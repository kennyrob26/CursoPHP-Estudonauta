<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis referênciadas</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
        }
        h1{
            font-size: 1.5em;
        }
    </style>
</head>
<body>
    <h1>Sem referência</h1>
    <?php
        $a = $_GET["a"];
        $b = $a;
        $b += 5;

        echo "<p>A variável '<strong>a</strong>' tem valor <strong>$a</strong><br/> e a variável '<strong>b</strong>' tem valor: <strong>$b</strong></p>"
    ?>
    <h1>Por referência</h1>
    <?php
        $c = $_GET["c"];
        $d = &$c;
        $d += 5;

        echo "<p>A variável '<strong>c</strong>' tem valor <strong>$c</strong><br/> e a variável '<strong>d</strong>' tem valor <strong>$d</strong></p>"
    ?>
</body>
</html>