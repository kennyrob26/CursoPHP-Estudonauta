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

        if($i >=18){
            $v = "já pode votar";
            $d = "já pode dirigir";
        }else{
            $v = "não pode votar";
            $d = "não pode dirigir";
        }
        echo "<p>Com essa idade voce $v e tambem $d</p>";
    ?>
</body>
</html>