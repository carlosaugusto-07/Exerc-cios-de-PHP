<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $n1 = $_GET["num1"] ?? 1;
        $n2 = $_GET["num2"] ?? 1;
        $resultado = $n1 / $n2;
        $resto = $n1 % $n2;
    ?>
    <main>
        <h2>DIVISÃO</h2>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
        <label for="num1">Valor 1:</label>
        <input type="number" name="num1" id="idnum1" value="<?=$n1?>">
        <label for="num2">Valor 2:</label>
        <input type="number" name="num2" id="num2" value="<?=$n2?>">
        <input type="submit" value="Dividir">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado da divisão</h2>
        <?php 
            echo "<ul><li>Dividendo: <strong>$n1</strong></li>";
            echo "<li>Divisor: <strong>$n2</strong></li>";
            echo "<li>Cociente: <strong>$resultado</strong></li>";
            echo "<li>Resto: <strong>$resto</strong></li></ul>";
        ?>
    </section>
</body>
</html>