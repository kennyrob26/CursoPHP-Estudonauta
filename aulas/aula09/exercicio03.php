<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        strong{
            color: red;
        }
    </style>
</head>
<body>
    <?php
        $n1 = isset($_GET["nota1"])?$_GET["nota1"]:0;
        $n2 = isset($_GET["nota2"])?$_GET["nota2"]: 0; 
        $media = ($n1 + $n2)/2;

        if($media < 5){
            $aprovacao = "reprovado";
        }else if($media < 7){
            $aprovacao = "recuperação";
        }else{
            $aprovacao = "aprovado";
        }
        echo "<p>A media do aluno é <strong>$media</strong>, e ele <strong>está $aprovacao</strong></p>"
    ?>
</body>
</html>