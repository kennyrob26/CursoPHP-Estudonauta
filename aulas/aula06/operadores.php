<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP - Cursoemvideo.com</title>
</head>
<body>
    <h1>Salário</h1>
    <?php
        $preco = $_GET["p"];
        echo "<p>O preço do produto é R$". number_format($preco, 2). "</p>";
        $preco -= $preco * 0.1;
        echo "<p>O novo preço com 10% de desconto será: R$". number_format($preco, 2) ."</p>";
    ?>
</body>
</html>