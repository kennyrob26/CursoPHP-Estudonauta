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

        $nome = "kenny robert";
        //Deixa a primeira letra de cada PALAVRA da frase em maiusculo
        $pMaiuscula = ucwords($nome);
        print("Seu nome é $pMaiuscula")
    ?>
</body>
</html>