<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Digite um numero</h1>
    <form action="index.php" method="get">
        <input type="number" name="raiz" id="">
        <button>analizar</button>
    </form>

    <?php 
    $input_value = $_GET['raiz'] ?? 1;
    $raiz = number_format(sqrt($input_value),3);
    $raiz_cubica = number_format($input_value **(1/3),3);
    ?>
    <p>Analizando o numero <?php echo$input_value ?>,temos: </p>
    <p>A sua raiz quadrada é <?php echo $raiz?> </p>
    <p>A sua raiz cubica é <?php echo $raiz_cubica?> </p>
</body>
</html>