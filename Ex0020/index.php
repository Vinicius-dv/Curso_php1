<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Reajustador de preço</h1>

    <form action="index.php" method="post">

    <p>Preço do produto</p>
    <input type="number" name="preço" id="">

    <p>qual sera o porcentual de reajuste ?</p>
    <input type="number" name="porcentagem" id="">

    <button>analizar</button>
    </form>

    <?php 
        $valor_input_preço = $_POST['preço'];
        $valor_input_porcentagem = $_POST['porcentagem'];
        $fração_decimal_porcen = $valor_input_porcentagem/100;
        $valor_imposto = $valor_input_preço *$fração_decimal_porcen;
        $valor_total = $valor_input_preço+$valor_imposto; 
    ?>
    <p>Resultado</p>
    <p>O produto que custava R$<?php echo $valor_input_preço;?> com <?php echo $valor_input_porcentagem ;?>% de aumento vai passar a custar R$<?php echo $valor_total;?> a partir de agora</p>   
</body>
</html>