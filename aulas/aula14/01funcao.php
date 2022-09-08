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
        function soma ($a, $b){
            $s = $a + $b;
            echo "<p>A soma vale $s</p>"; 
        }

        soma(3,4);
        soma(7, 8);
        $x = 30;
        $y = 21;
        soma($x, $y);
    ?>
</body>
</html>