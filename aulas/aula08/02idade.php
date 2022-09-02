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
        $nome = isset($_GET["nome"]) ? $_GET["nome"]:"Não Inserido";
        $ano = isset($_GET["ano"]) ? $_GET["ano"]: 0;
        $sexo = isset($_GET["sexo"]) ? $_GET["sexo"]: "Não inserido";
        $idade = date("Y") - $ano;
        echo "$nome é $sexo e tem $idade anos. ";

    ?>
</body>
</html>