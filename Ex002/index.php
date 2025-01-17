<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oi</title>
</head>
<body>
    <h1>Exemplo de php</h1>


    <?php 
    //Aqui eu mudo a timezone para a de são paulo, pq por padrão ele me retorna a cet que é umas 3 horas de diferença do horario do  brasil
    date_default_timezone_set("America/Sao_Paulo");
        //com o date consigo pegar o dia atual, a difereça do d ser minusculo é que o D ele retorna o dia da semana por exemplo terça feira. M é de mes e Y é o ano
        echo "Hj é dia ".date("d/M/Y");
        //Para pegar a hora eu uso g minuto i e segundos s
        echo "E a hora atual é ".date("g:i:s");
    ?>
</body>
</html>