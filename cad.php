<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 1</title>
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <main>
        <?php
            $num = $_GET["num"] ?? "É necessário que você digite algum número";
            $antecessor = $num - 1;
            $sucessor = $num + 1;
            echo "<p>Esse é o número ecolhido: $num</p>";
            echo "<p>Esse é o antecessor de $num: $antecessor</p>";
            echo "<p>Esse é o sucessor de $num: $sucessor</p>";
        ?> 
        <p><a href="javascript:history.go(-1)">Voltar à página anterior</a></p>
    </main>
</body>
</html>