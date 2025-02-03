<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <p>qual é o total de segundos ?</p>
        <input type="number" name="tempo" id="" min="0">
        <button>analizar</button>
    </form>

    <?php 
    $input_value = $_POST['tempo'];
    $semana = 0;
    if($input_value> 604.800){
        $soma_semana = number_format($input_value/604.800);
        $soma_semana_inteiro = explode(',',$soma_semana);
        $semana = $soma_semana_inteiro;
    };

    $dia = 0;
    if($input_value> 86.400){
        $soma_dia = number_format($input_value/86.400);
        $soma_dia_inteiro = explode(',',$soma_dia);
        $dia = $soma_dia_inteiro;
    };

    $hora = 0;
    if($input_value> 3600){
        $soma_hora = number_format($input_value/3600);
        $soma_hora_inteiro = explode(',',$soma_hora);
        $hora = $soma_hora_inteiro;
    };
    
    $minutos = 0;
    if($input_value>60){
        $soma_min = number_format($input_value/60);
        $soma_min_inteiro = explode(',',$soma_min);
        $minutos = $soma_min_inteiro;
    };

    if($semana<604.800){
        $semana = 0;
    };

    if($dia<86.400){
        $dia = 0;
    };

    if($hora<3600){
        $hora = 0;
    };

    if($minutos<60){
        $minutos = 0;
    };
    
    ?>

    <h1>Totalizando tudo</h1>
    <p>Analizando o valor que foi digitado <?php echo$input_value;?> segundos equivalem a um total de: </p>

    <p> <?php
     if($semana<604.800){
       echo $semana = 0;
    }else{
        echo $semana[0];
    };
    ?> 
    semanas</p>
    
    <p> <?php
     if($dia<86.400){
       echo $dia = 0;
    }else{
        echo $dia[0];
    };
    ?> 
    dias</p>

    <p> <?php
     if($hora<3600){
       echo $hora = 0;
    }else{
        echo $hora[0];
    };
    ?> 
    horas</p>

    <p> <?php
     if($minutos<60){
       echo $minutos = 0;
    }else{
        echo $minutos[0];
    };
    ?> 
    minutos</p>

    <p> <?php echo $input_value?> Segundos</p>
</body>
</html>