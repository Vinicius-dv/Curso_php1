<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calculando idade</h1>
    <form action="" method="post">
        <p>Em que ano você nasceu ?</p>
        <input type="number" name="nascimento" id="" min="1900" max="2025">

        <p>Quer saber sua idade em que ano?</p>
        <input type="number" name="atual" id=""  min="1920" max="2025">

        <button>analizar</button>
    </form>

    <?php 
    $input_value_nasc = $_POST['nascimento'];
    $input_value_atual = $_POST['atual'];
    $idade = abs($input_value_nasc - $input_value_atual);
    if($input_value_nasc>$input_value_atual){
        echo"Digite uma idade valida";
        return;
    };
    ?>

    <p>Quem nasceu em <?php echo$input_value_nasc; ?> vai ter <?php echo$idade; echo" anos"; ?> em <?php echo$input_value_atual; ?> </p>
</body>
</html>