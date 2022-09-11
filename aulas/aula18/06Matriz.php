<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>
    <pre>
        <?php
            /*
            A matriz 
            [2][3]
            [3][4]
            [9][5]
            pode ser representada da seguinte forma:
            */
            $m = array(array(2,3),  //linha 0
                       array(3,4),  //linha 1
                       array(9,5)); //linha 2
        
            print_r($m);
        ?>
    </pre>
</body>
</html>