<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>
    <h1>Tabuada</h1>
    <form action="03tabuadaResposta.php" method="get">
        Número: 
        <select name="n">
            <?php
            $i =1;
            while($i <= 10){
                echo "<option value='$i'>$i</option>";
                $i++;
            }

            ?>
        </select>

        <input type="submit">
    </form>
    
</body>
</html>