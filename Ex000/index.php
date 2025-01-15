<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu primeiro código com php</title>
</head>
<body>
    <h1>Primeiro código com php</h1>
    <p>
        <?php 
        $ola_mundo = 'Olá Mundo ';
        $ola_mundo2 ='Olá Mundo ';
        echo $ola_mundo;
        if($ola_mundo == $ola_mundo2){
            echo 'As strings são iguais 🌎';
        }else{
            echo 'As Strings não são iguais';
        }
        ?>
    </p>
</body>
</html>