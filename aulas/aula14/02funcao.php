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
        function soma($x, $y){
            $s = $x + $y;
            return $s;
        }
        $a = 5;
        $b = 22;
        $r = soma($a, $b);
        echo "A soma entre $a e $b é $r";
    ?>
</body>
</html>