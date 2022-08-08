<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP - CrusoemVideo.com</title>
</head>
<body>
    <?php
        $atual = $_GET["aa"];
        echo "<p>O ano atual é $atual e o ano anterior é " . --$atual ."</p>";
    ?>
</body>
</html>