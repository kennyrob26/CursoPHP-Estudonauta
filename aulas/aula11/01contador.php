<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>curso de PHP</title>
</head>
<body>
    <?php
    //Contagem crescente
        $c=1;
        while($c <= 10){
            echo "$c <br>";
            $c++;
        }
        echo"<br>";
    //Contagem regressiva
        $b=10;
        while($b >= 1){
            echo "$b <br>";
            $b--;
        }
        echo "<br>";
    //Contagem pulando números
        $a=1;
        while($a <= 10){
            echo "$a <br>";
            $a += 2;
        }

    ?>
</body>
</html>