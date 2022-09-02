<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>
    <form action="02parte2.php" method="get">
        <?php
        $c = 1;
        while($c <= 5){
            echo "<p>Valor $c: <input type='number' name='v$c' max='100' min='0' value='0'></p>";
            $c++;
        }
        ?>
        <input type="submit" value="enviar">
    </form>
</body>
</html>