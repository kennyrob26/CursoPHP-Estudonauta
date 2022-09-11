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
    //não funcionou
        $nome = "Kenny";
        $novo = str_pad($nome, 100, " ", STR_PAD_LEFT);
        print("Seu nome é $novo .")
    ?>
</body>
</html>