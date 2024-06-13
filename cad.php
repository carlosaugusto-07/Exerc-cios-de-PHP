<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado da análise</h1>
    </header>
    <main>
        <?php 
            $num = $_POST["valor"] ??  "É necessário que tenha algum valor";
            
            echo "<p>Analisando o número <strong>" . number_format($num, 3, ",", ".") ."</strong> informado pelo usuário:</p>";

            $int = (int) $num;
            $real = $num - $int;

            echo "<ul><li> A parte inteira do número é: <strong>" . number_format($int, 0, ",", ".") . "</strong></li>";
            echo "<li>A parte real no número é: <strong>" . number_format($real, 3, ",", ".") . "</strong></li></ul>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>