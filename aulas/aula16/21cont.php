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
        $frase = "Fácil de falar, difícil fazer";
        $cont = substr_count($frase, ",");
        echo "A frase '$frase' possui $cont ','";
    ?>
</body>
</html>