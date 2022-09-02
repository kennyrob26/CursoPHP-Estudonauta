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
        $inicio = isset($_GET["ini"])?$_GET["ini"]:1;
        $fim = isset($_GET["fim"])?$_GET["fim"]:1;
        $i = isset($_GET["inc"])?$_GET["inc"]:1;

        if($inicio < $fim){
            $c = $inicio;
            while($c <= $fim){
                echo "$c ";
                $c += $i;
            }
        }else{
            $c = $inicio;
            while($c >= $fim){
                echo "$c ";
                $c -= $i;
            }
        }
    ?>
</body>
</html>