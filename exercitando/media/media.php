<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media</title>
</head>
<body>
    <h1>Calculadora de media</h1>
    <?php
        $n1 = $_GET['n1'];
        $n2 = $_GET['n2'];
        $n3 = $_GET['n3'];
        $n4 = $_GET['n4'];

        $media = ($n1 + $n2 + $n3 + $n4) / 4;

        echo "A média do aluno é $media";
    ?>
</body>
</html>