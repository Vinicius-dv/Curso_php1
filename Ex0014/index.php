<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
        <h1>Quantos reais você tem na sua carteira</h1>
        <input type="number" name="conversor">
        <button>enviar</button>
    </form>
    <?php 
        $input_value = $_GET['conversor'];
        $conversor = $input_value/6;
        $decimais = number_format($conversor,2);
        echo "Seus R$$input_value equivalem a US$$decimais";
    ?>
</body>
</html>