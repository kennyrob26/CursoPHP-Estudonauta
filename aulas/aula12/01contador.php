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
        $c = 1;
        do{
            echo "$c ";
            $c += 50;
        } while($c <= 1000);
    ?>
</body>
</html>