<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Manipulação de strings me php</title>
</head>
<body>
    <?php 
        $curso =  "curso";
        const php = "Aprendendo php";
        $nome = 'vinicius';
        $sobrenome = 'henrrique';

        $nome2 = 'leo';
        $sobrenome2 = 'henrrique';

        //Aqui eu botei a variavel nome2 entre ""
        echo "$nome <br>  \"$nome2\" $sobrenome";

        //echo "$curso " .php;
        //essas duas \\ eu uso para o php não intepretar como string, apenas escrever oque está entre as duas \\
        //echo "$nome \"rossi\" $sobrenome"
        ?>
</body>
</html>