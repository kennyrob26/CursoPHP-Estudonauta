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
        $v =isset($_GET["val"])? $_GET["val"]:1;
        $c = $v;
        $fat = 1;
        do{
            $fat = $fat * $c;
            $c--;
        }while($c >= 1);
        echo "O fatorial de $v é: $fat"
    ?>
    <p><a href="./02fatorial.html">Voltar</a></p>
</body>
</html>