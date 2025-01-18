<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
      
    }
</style>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            //Dessa forma eu consigo pegar o input do html, onde eu passo o nome do input para o $_GET que é o metodo do formulario. Já o ?? serve para verificar se a variavel existe se não existir ele deixa vazio
            $nome_input = $_GET["nome_input"] ?? '';
            $sobrenome_input = $_GET["sobrenome_input"] ?? '';

            //O empty serve para verificar se a variavel ta vazia, null,false ou se é um array vazio, ai se as variaveis estiverem vazias eu mostro o echo e dou um return para parar o código
            if(empty($nome_input) || empty($sobrenome_input) === ''){
                echo "Digite um nome e um sobrenome na página principal!";
                return;
            }; 

            // o requeste é uma junção do $_get $_post e do $_cookies
            var_dump($nome_input);

            echo "<h1>Prazer te conhecer $nome_input $sobrenome_input!</h1>"
        ?>
        <p><a href="index.html">Voltar para a pagina principal</a></p>
    
    </main>
</body>
</html>