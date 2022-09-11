<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>
    <?php
        $vetor = array("Olá,", "tudo", "bem?" );
        $implode = implode(" ", $vetor);
        echo $implode;
    ?>
</body>
</html>