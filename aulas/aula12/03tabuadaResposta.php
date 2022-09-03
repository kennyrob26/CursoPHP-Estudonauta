<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>
    <h1>Resultado</h1>
    <?php
        $n = isset($_GET["n"])?$_GET["n"]:1;
        $i = 1;
        while($i <= 10){
            echo "<p>$n X $i = " . ($n*$i) . "</p>";
            $i++;
        }
    ?>
    <a href="./03tabuada.php">Voltar</a>
</body>
</html>