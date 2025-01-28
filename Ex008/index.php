<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $value_input = $_GET["input_success"] ?? 0;
        $valor_ant = $value_input - 1;
        $valor_sucessor = $value_input + 1;
        echo "o valor digitado foi $value_input, o valor anterior desse numero <br> é: $valor_ant o numero sucessor é: <br> $valor_sucessor";
    ?>
</body>
</html>