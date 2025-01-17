<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis e constantes</title>
</head>
<body>
    <h1>APrendendo sobre variaveis e constantes</h1>

    <?php 
    $nome = 'Vinicius';
    $teste =  15.5;
    const SOBRENOME = 'Henrrique';
    $nome = 'vitor';
    echo "Fala $nome ".SOBRENOME ." Tipo da variavel:" .gettype($teste);
    

    /* Tipos em php
        1 String: Nem precisa de explicação
        2 Integer: Esse integer é um numero inteiro,
        3 double: O double é o tipo para numeros com ponto.
        4 Bollean: Nem precisa de explicação
    */ 
    
    ?>
</body>
</html>