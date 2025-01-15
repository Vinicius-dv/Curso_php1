<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do servidor</title>
</head>
<body>
    <h1>Dados do servidor</h1>

    <?php 
    $nome = 'vinicius';
    //phpinfo me retorna varias tabelas com varias informações sobre o sistema e muitas outras informações 
     phpinfo();
     echo "<h1>Fala meu peixe $nome </h1>";
    ?>
</body>
</html>