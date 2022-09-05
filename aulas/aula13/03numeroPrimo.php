<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>
    <h1>Calculadora de número primo</h1>
    <?php
      $n = isset($_GET["n"])? $_GET["n"]:1;
      echo "<p>Os valores multiplos de $n são: ";
      $c = 1; //conta a quantidade de números primos
      for($i = $n; $i > 1; $i--){
        //Se o módulo de n por i for 0
        if(($n%$i) == 0){
            echo "$i, ";
            $c++;
        }
      }  
      echo "e 1.</p>";
      echo "O total de multiplos é: $c";
    ?>
</body>
</html>