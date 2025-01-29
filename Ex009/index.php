<!--Paara eu enviar dados em json eu não posso ter a estrutura html no código php-->
 <?php   
    //tenho que definir o cabeçalho dessa forma para enviar dados json ou aceitar dados json, e o json_encode transforna dados em json
    header('Content-Type: application/json');
    $dados = array(
        'numero' => rand(1,100)
    );
    $json = json_encode($dados);
    echo $json;
?>
