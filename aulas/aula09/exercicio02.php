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
        $a = isset($_GET["ano"])?$_GET["ano"]:1900;
        $i = date("Y") - $a;
        echo "<p>Você nasceu em $a e tem $i anos</p>";

        if ($i < 16){
            $tipoVoto = "não vota";
        }else if (($i < 18) || ($i > 65)){
            $tipoVoto = "voto opcional";
        }else{
            $tipoVoto = "voto obrigatorio";
        }
        echo "<p>Para essa idade, $tipoVoto</p>";
    ?>
</body>
</html>