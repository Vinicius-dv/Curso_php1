<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Caixa eletrônico</h1>
    <form action="index.php" method="post">
        <p>Quantos R$ você quer sacar ?</p>
        <input type="number" name="saque" id="" min="5">
        <button>sacar</button>
    </form>

    <?php 
        $input_value = $_POST['saque'];
        $nota_cem = 0;
        $nota_cia = 0;
        $nota_vin = 0;
        $nota_dez = 0;
        $nota_cin = 0;

        if($input_value>=100){
            $soma_cem = number_format($input_value/100);
            $soma_cem_inteiro = explode(',',$soma_cem);
            $nota_cem = $soma_cem_inteiro;
        }
        
        if($input_value>=50){
            $soma_cia = number_format($input_value/50);
            $soma_cia_inteiro = explode(',',$soma_cia);
            $nota_cia = $soma_cia_inteiro;
        }

        if($input_value>=20){
            $soma_vin = number_format($input_value/20);
            $soma_vin_inteiro = explode(',',$soma_vin);
            $nota_vin = $soma_vin_inteiro;
        }


        if($input_value>=10){
            $soma_dez = number_format($input_value/10);
            $soma_dez_inteiro = explode(',',$soma_dez);
            $nota_dez = $soma_dez_inteiro;
        }


        if($input_value>=5){
            $soma_cin = number_format($input_value/5);
            $soma_cin_inteiro = explode(',',$soma_cin);
            $nota_cin = $soma_cin_inteiro;
        }
    ?>

    <div style="display: flex; flex-direction: row;">
    <img style="margin-top: 100px;" src="img/100-reais.jpg" alt="">
    <span style="margin-top: 200px; margin-left: 20px;">
        <?php 
            if($input_value<100){
                echo $nota_cem = 0;
            }else{
                echo $nota_cem[0];
            };
        ?>
    </span>
    </div>

    <div style="display: flex; flex-direction: row;">
    <img style="margin-top: 100px;" src="img/50-reais.jpg" alt="">
    <span style="margin-top: 200px; margin-left: 20px;">
    <?php 
            if($input_value<50){
                echo $nota_cia = 0;
            }else{
                echo $nota_cia[0];
            };
    ?>
    </span>
    </div>


    <div style="display: flex; flex-direction: row;">
    <img style="margin-top: 100px;" src="img/20-reais.jpg" alt="">
    <span style="margin-top: 200px; margin-left: 20px;">
    <?php 
            if($input_value<20){
                echo $nota_vin = 0;
            }else{
                echo $nota_vin[0];
            };
        ?>
    </span>
    </div>

    <div style="display: flex; flex-direction: row;">
    <img style="margin-top: 100px;" src="img/10-reais.jpg" alt="">
    <span style="margin-top: 200px; margin-left: 20px;">
    <?php 
            if($input_value<10){
                echo $nota_dez = 0;
            }else{
                echo $nota_dez[0];
            };
        ?>
    </span>
    </div>

    <div style="display: flex; flex-direction: row;">
    <img style="margin-top: 100px;" src="img/5-reais.jpg" alt="">
    <span style="margin-top: 200px; margin-left: 20px;">
    <?php 
            if($input_value<5){
                echo $nota_cin = 0;
            }else{
                echo $nota_cin[0];
            };
        ?>
    </span>
    </div>

</body>
</html>