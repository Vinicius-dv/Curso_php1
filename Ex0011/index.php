
<?php 
//Aqui eu tenho a url com os dados da cotação do dolar
 $url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao='01-28-2025'&\$top=100&\$format=json&\$select=cotacaoCompra";
 
 //faço uma requisição para essa url
 $res = file_get_contents($url);
 //pegos a resposta e transformo em um array
 $dados = json_decode($res,true);
 //aqui eu pego apenas o valor da cotação do dolar ou seja o [0] serve para pegar o valor do primeiro item de value e o primeiro item tem o cotacaocompra ai eu pego apenas o valor de cotacaoCompra. ou seja eu pego o item 0 de value que contem 3 'chaves' ai eu pego apenas a chave cotacaoCompra. e value é uma chave dentro do array que contem os itens e as dados.
 $cotação =  $dados['value'][0]['cotacaoCompra']; 
 //pego o numero digitaddo no html
 $valor_input = $_GET["conversor"];
 //faço a converção de real para dolar
 $conversor = $valor_input/$cotação;
 //deixo o valor da conversão com apenas 2 casas decimais
 $casas_decimais = number_format($conversor,2);
 echo "Seus R$$valor_input eviquavalem a US$ $casas_decimais";
 ?>