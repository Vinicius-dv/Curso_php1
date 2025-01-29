<?php 
    $valor_input = $_GET["conversor"];
    $valor_dolar = $valor_input/5.86;
    $conversão = number_format($valor_dolar,2);
    echo "Seus R$$valor_input eviquavalem a US$ $conversão";
?>