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
        $ano = $_GET["an"];
        $idade = 2022 - $ano;
        echo "<p>Quem nasceu em $ano tem idade de $idade anos</p>";
        $tipo = ($idade>=18 && $idade<65)?"OBRIGATORIO":"NAO OBRIGATORIO";
        echo "<p>E dessa forma seu voto e $tipo</p>";
    ?>
</body>
</html>