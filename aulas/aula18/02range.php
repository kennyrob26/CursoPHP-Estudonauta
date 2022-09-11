<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>
    <?php
        //A função range($a, $b, $c) cria um vetor que inicia em $a, termina em $b pulando de $c em $c.
        $c = range(1, 10, 1);
        foreach($c as $v){
            echo "$v ";
        }
    ?>
</body>
</html>