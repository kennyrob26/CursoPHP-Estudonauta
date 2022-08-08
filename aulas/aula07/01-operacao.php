<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operacao</title>
</head>
<body>
    <h1>Soma ou Multiplica</h1>
    <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $tipo = $_GET["op"]; //recebe s para soma, e m para multiplicação
        echo "<p>Os valores passados foram $n1 e $n2</p>";
        $r = ($tipo == "s") ? $n1+$n2 : $n1*$n2;
        echo "<p> O resultado é $r </p>"
    ?>
</body>
</html>