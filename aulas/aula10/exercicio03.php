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
        $estado = isset($_GET["est"])?$_GET["est"]:"nan";

        switch ($estado){
            case 1:
                $r = "Norte";
                break;
            case 2:
                $r = "Nordeste";
                break;
            case 3;
                $r = "Sudeste";
                break;
            case 4:
                $r = "Centro-Oeste";
                break;
            case 5: 
                $r = "Sul";
                break;
            default:
                $r = "ERROR";             
        }

        echo " O estado selecionado pertence a região $r"

    ?>
</body>
</html>