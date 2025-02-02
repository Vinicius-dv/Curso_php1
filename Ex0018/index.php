<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Medias</h1>
    <form style="display: flex; flex-direction: column; width: 20%; margin: auto;" action="" method="post">

        <label for="1_nota">1 nota</label>
        <input type="number" name="1_nota" id="" min="0" max="10">

        <label for="1_peso">1 peso</label>
        <input type="number" name="1_peso" id="">

        <label for="2_nota">2 nota</label>
        <input type="number" name="2_nota" id=""  min="0" max="10">

        <label for="2_peso">2 peso</label>
        <input type="number" name="2_peso" id="">

        <button>analizar</button>
    </form>

    <?php 
    $input_value_nota_1 =  $_POST['1_nota']??1;
    $input_value_nota_2 =  $_POST['2_nota']??1;
    $soma_input = $input_value_nota_1+$input_value_nota_2;
    $media_simples = number_format($soma_input/2,2);


    $input_value_peso_2 =  $_POST['2_peso']??1;
    $input_value_peso_1 =  $_POST['1_peso']??1;

    $soma_peso_1 = $input_value_nota_1*$input_value_peso_1;
    $soma_peso_2 = $input_value_nota_2*$input_value_peso_2;
    $total = $soma_peso_1+$soma_peso_2;
    $total_pesos = $input_value_peso_1+$input_value_peso_2;
    $total_media = number_format($total/$total_pesos,2);
    ?>

    <p>Analizando os valores  <?php echo$input_value_nota_1 ; echo" e "; echo $input_value_nota_2; ?>,temos: </p>
    <p>A sua media simples é <?php echo $media_simples?> </p>
    <p>A sua media Ponderada é <?php echo $total_media?> </p>
</body>
</html>