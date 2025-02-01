<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Informe seu salario</h1>
    <form action="index.php" method="get">
        <input type="number" name="salario" id="" value="1400" min="1400" max="10000">
        <button>analizar</button>
    </form>

    <h1>Resultado final</h1>
    <?php 
    $input_value = $_GET['salario'] ?? 1400;
    $qtd_salario =  number_format($input_value/1400); 
    $resto_salario = $input_value%1400;
    ?>
    <p>Quem recebe um salario de <?php echo $input_value;?> ganha <?php echo $qtd_salario;?> salario minimos + R$<?php  echo $resto_salario; ?> </p>
</body>
</html>