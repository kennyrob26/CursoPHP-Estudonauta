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
        $v = array("nome" => "Ana",
                   "idade" => 23,
                   "peso"  => 65.5);

        //adicionar um novo item:
        $v["fuma"] = true;
        
        foreach($v as $c => $val){
            echo "O valor de $c é $val<br>";
        }
    ?>

</body>
</html>