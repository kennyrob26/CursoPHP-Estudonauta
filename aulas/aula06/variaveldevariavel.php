<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ariáveis de variáveis</title>
</head>
<body>
    <h1>Variáveis por referência</h1> 
    <?php
        $nome = "joao";
        $$nome = "Augusto";
        echo "<p>Agora nós temos duas variáveis, a variável nome, que tem valor $nome <br/> e a variavel joao, que tem valor $joao </p>"
    ?>   
</body>
</html>