<?php 
$valor_input_string =  $_GET['conversor'];
// aqui eu verifico se existe uma virgula no valor do input ai se for false é pq não tem virgula
if(strpos($valor_input_string,',') === false){
    echo "O valor inteiro é $valor_input_string e não tem parte fracionaria";
}else{
    // o explode serve para pegar o valor depois da virgula ou tbm pegar o valor do array, ou seja se o numero tiver , eu transformo em um array onde eu separo o valor inteiro do valor com, ou seja depois da , eu separo o numero em dois na posição o fica o valor inteiro e na 1 fica o fracionario
    echo "O Valor inteiro é ".explode(',' ,$valor_input_string)[0];
    echo "<br>";
    echo "O Valor fracionario é "."0,".explode(',' ,$valor_input_string)[1];
};
?>