<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primetivos em php</title>
</head>
<body>
    <?php 
        $num_int = 300;
        $num_double = 210.10;
        $nome_string = 'vini';
        $type_boollean = true;
        // eu consigo transformar um tipo em outro definindo na declaração da varial entre () o tipo do valor
        $num = (string) 15.4;
        $array = [1,2,3,4,5,6,7,8,9,9,9,];

        if(gettype($num_int) =='integer' && gettype($num_double) =='double' && gettype($nome_string) =='string' && gettype($type_boollean)== 'boolean'){
            echo 'Os tipos estão certos  ';
        }else{
            echo 'Os tipos estão incorretos';
        }
        //var_dump me retorna o tipo e o valor da variavel
        var_dump($num);
        var_dump($array);
    ?>
</body>
</html>