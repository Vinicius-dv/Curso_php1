<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1>Anatomia de uma divisão</h1>
            <form id="form" action="index.php" method="get">
                <label for="anatomia_dividendo">Dividendo</label>
                <input type="number" name="anatomia_dividendo" id="" value="1">
                <label for="anatomia_divisor">Divisor</label>
                <input type="number" name="anatomia_divisor" id="" value="1">
                <button>enviar</button>
            </form>

        <h1>Estrutura de uma Divisão</h1>
        <?php 
            $h1_dividendo = $_GET['anatomia_dividendo'] ?? 1;
            $h1_divisor = $_GET['anatomia_divisor'] ?? 1;
            $res_div = number_format($h1_dividendo/$h1_divisor) ?? 1;
            $resto = $h1_dividendo % $h1_divisor;
         ?>

        <div style="display: flex; margin-left: 50px;">
            <h1 style="margin-right: 50px;">
                <?= $h1_dividendo ?>
            </h1>

            <h1>
                <?= $h1_divisor ?>
            </h1>

        </div>

        <div style="display: flex; margin-left: 50px;">
            <h1 style="margin-right: 50px;">
                <?= $resto?>
            </h1>

            <h1>
                <?=  $res_div?>
            </h1>
        </div>      
</body>
</html>