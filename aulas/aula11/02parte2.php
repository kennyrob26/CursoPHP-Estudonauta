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
        $i = 1;
        while ($i <= 5){
            $v = "num".$i;
            $url ="v".$i; // url são as variáveis, como v1, v2, v3, ou seja v + i
            $$v = isset($_GET["$url"])?$_GET["$url"]:0; //pega os valores na url, v1, v2, v3..
            $i++;
        }
        $i=1;
        while($i<=5){
            $v = "num".$i;
            echo "Valor$i: ".$$v."<br>";
            $i++;
        }
    ?>
</body>
</html>