<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 8</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $num = $_GET["n"] ?? 1;
        $raiz_quadrada = sqrt($num);
        $raiz_cubica = $num ** (1/3);
    ?>
    <main>
        <h1>Raíz quadrada e raíz cúbica</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="n">Insira o número a ser calculado:</label>
        <input type="number" name="n" id="idn" value="<?=$num?>">
        <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h1>Resultado</h1>
        <?php
            echo "<ul><li>Raíz quadrada: <strong>$raiz_quadrada</strong></li>";
            echo "<li>Raíz cúbica: <strong>$raiz_cubica</strong></li></ul>";
        ?>
    </section>
</body>
</html>