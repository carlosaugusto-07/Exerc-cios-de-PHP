<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 7</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $salario = $_GET["sal"] ?? 1;
        $sal_minimo = 1412;
        $qtd_sal = $salario / $sal_minimo;
        $qtd_sal_int = (int) $qtd_sal;
        $resto_sal = $salario % $sal_minimo;
    ?>
    <main>
        <h1>Calculo do salário mínimo utilizando os dados de 2024 (R$1412,00)</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="sal">Insira o seu salário:</label>
            <input type="number" name="sal" id="idsal" value="<?=$salario?>" step="0.01">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <?php
            echo "<p>Quem possui um salário de <strong>R\$" . number_format($salario, 2, ",", ".") . "</strong>, ganha <strong>" . number_format($qtd_sal_int, 0, ",", ".") . " salário(s) mínimo(s)</strong> e + <strong>R\$" . number_format($resto_sal, 2, ",", ".") . "</strong></p>";
        ?>
    </section>
</body>
</html>