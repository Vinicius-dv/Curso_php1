<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $soma = 5;
        $soma2 = 2;
        $div_real = 5/2;
        $rais = sqrt(8);
        echo intdiv($soma,$soma2);
        echo "<br>";
        echo $div_real;
        echo "<br>";
        echo min(5,2);
        echo "<br>";
        echo max(5,2);
        echo "<br>";
        echo pow(2,5);
        echo "<br>";
        //aqui eu arredondo a rayz quadrada
        echo round($rais);
    ?>
</body>
</html>