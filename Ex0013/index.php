<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <pre>
        <?php
        setcookie("dia-da-semana","quinta", time()+3600);
        session_start();
        $_SESSION["teste" ] = "funcionou";
        echo "<h1>Superglobal GET </h1>";
        var_dump($_GET);
        echo "<h1> Superglobal cookie</h1>";
        var_dump($_COOKIE);
        echo "<h1> Superglobal session</h1>";
        var_dump($_SESSION);
        echo "<h1> Superglobal env</h1>";
        var_dump($_ENV);
        echo "<h1> Superglobal server</h1>";
        var_dump($_SERVER)
        ?>
        </pre>
    </main>
</body>
</html>