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
        $txt = "Olá, esta é uma mensagem um pouco grande, para que seja possível efetuar o teste da função wordwrap";
        $res = wordwrap($txt, 1, "<br>\n", true);
        echo "$res";

    ?>
</body>
</html>