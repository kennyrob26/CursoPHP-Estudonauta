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
        $d = isset($_GET["ds"])?$_GET["ds"]:0;

        switch($d){
            case 1:
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                $r = "vai estudar";
                break;
            case 7:
            case 8:
                $r = "pode descansar";
                break;
            default:
                echo "Dia da semana inválido"
        }
        echo "$r";
    ?>
</body>
</html>